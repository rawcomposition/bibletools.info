<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Resources extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper( "url" );
		$this->load->helper( "reference" );
		$this->load->model( "kjvmodel" );
		$this->load->model( "resourcemodel" );
		$this->load->model( "mapmodel" );
		$this->load->helper( "history" );
	}
	
	function json()
	{
		$ref = $this->uri->segment(3);
		$short_ref = $ref;
		$word = $this->uri->segment(4);
		$ref = shortTextToNumber( $ref );
		
		if( $word ) {
			$strongs = $this->kjvmodel->lexicon( $ref, $word );
			$resources = array(
				"strongs" => $strongs,
				"resources" => array( 
					$strongs['data']['def']['long'],
					$this->kjvmodel->lexicon_occurances( $ref, $word, $strongs['base_word'] ),
				),
			);
			$this->output->set_output( json_encode( $resources ) );
		} else {
			$resources = array(
				"main_resources" => $this->resourcemodel->getMain( $ref ),
				"sidebar_resources" => array_filter( array_merge(
					[ $this->kjvmodel->getCrossReferences( $ref ) ],
					$this->mapmodel->get( $ref )
				) ),
				"verse" => $this->kjvmodel->html_verse( $ref ),
				"text_ref" => parseReferenceToText( $ref ),
				"nav" => $this->kjvmodel->nav( $ref ),
			);
			saveLastVerse( $short_ref );
			$this->output->set_output( json_encode( $resources ) );
		}
	}
	
	function get()
	{
		//ANDROID
		
		$ref = constructReference( $this->uri->segment(3), $this->uri->segment(4), $this->uri->segment(5) );
		
		$maps = $this->mapmodel->get( $ref );
		foreach( $maps as $key => $map ) {
			$maps[$key]['content'] = "Update the app to view Biblical maps.";
		}
		
		$resources = array(
			$this->kjvmodel->plain_verse( $ref ),
			$this->commentarymodel->get( $ref, "sdabc", "SDA Bible Commentary" ),
			$this->commentarymodel->get( $ref, "mhcc", "Matthew Henry Concise Bible Commentary", true ),
			$this->commentarymodel->get( $ref, "acbc", "Adam Clarke Bible Commentary" ),
		);
		$resources = array_merge( $resources,
			$maps,
			$this->egwmodel->verse_quotes( $ref )
		);
		
		$results['resources'] = array_values( array_filter( $resources ) );
		$this->output->set_output( json_encode( $results ) );
	}
}