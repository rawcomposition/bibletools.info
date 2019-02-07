<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" manifest="old.manifest">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="BibleTools.info is a web app designed to enhance your Bible study experience by providing powerful resources for almost every verse.">
	<meta name="author" content="Adam Jackson">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
	<link rel="icon" href="/favicon.png"> 
	<link rel="apple-touch-icon" href="/assets/img/icons/Icon-60@2x.png" />
  	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icons/Icon-60@3x.png" />
  	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/icons/Icon-76.png" />
  	<link rel="apple-touch-icon" sizes="152x152" href="/assets/img/icons/Icon-76@2x.png" />
  	<link rel="apple-touch-icon" sizes="58x58" href="/assets/img/icons/Icon-Small@2x.png" />
	
	<title><?php echo $title ?></title>
	<style>address,dl,ol,ul{margin-bottom:1rem}.navbar-toggler,a{background-color:transparent}dl,ol,p,ul{margin-top:0}#search,a:not([href]):not([tabindex]):focus{outline:0}*,::after,::before{box-sizing:border-box}html{line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:transparent}@-ms-viewport{width:device-width}article,aside,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;line-height:1.5;text-align:left}[tabindex="-1"]:focus{outline:0!important}input[type=text]{-webkit-appearance:none}abbr[data-original-title],abbr[title]{-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0}.navbar-toggler:not(:disabled):not(.disabled),.open-menu,.resource:not(.expand){cursor:pointer}address{font-style:normal;line-height:inherit}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}b,strong{font-weight:bolder}a{text-decoration:none;-webkit-text-decoration-skip:objects}a:not([href]):not([tabindex]),a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none}img{vertical-align:middle;border-style:none}svg{overflow:hidden}table{border-collapse:collapse}th{text-align:inherit}label{display:inline-block;margin-bottom:.5rem}.navbar,.row{display:-ms-flexbox;-ms-flex-wrap:wrap}button{border-radius:0}button:focus{outline:dotted 1px;outline:-webkit-focus-ring-color auto 5px}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=radio],input[type=checkbox]{box-sizing:border-box;padding:0}textarea{overflow:auto;resize:vertical}h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-family:inherit;line-height:1.2;margin-top:0}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.75rem}h4{font-size:1.5rem}h5{font-size:1.25rem}h6{font-size:1rem}.small,small{font-weight:400}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-sm-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-sm-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-md-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:992px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.col-lg-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:none}.col-lg-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-lg-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}.navbar{position:relative;display:flex;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar>.container{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.panel-modern,p{margin-bottom:25px}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:center center no-repeat;background-size:100% 100%}@media (max-width:575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-sm .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}@media (max-width:767.98px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-lg .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}@media (max-width:1199.98px){.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{padding-right:0;padding-left:0}}@media (min-width:1200px){.navbar-expand-xl{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-xl .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-xl .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}}.navbar-expand{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand>.container,.navbar-expand>.container-fluid{padding-right:0;padding-left:0}.navbar-expand .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand>.container,.navbar-expand>.container-fluid{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.hidden,.navbar-expand .navbar-toggler{display:none}.navbar-dark .navbar-brand,.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.5)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.5);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")}.navbar-dark .navbar-text{color:rgba(255,255,255,.5)}.navbar-dark .navbar-text a,.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.ml-auto,.mx-auto{margin-left:auto!important}body{background-color:#f0f3f6;font-family:Lato,"Helvetica Neue",Helvetica,Arial,Frutiger,"Frutiger Linotype",Univers,Calibri,"Gill Sans","Gill Sans MT","Myriad Pro",Myriad,"Nimbus Sans L","Liberation Sans",Tahoma,Geneva,sans-serif;font-weight:300;font-size:16px;color:#555;-webkit-font-smoothing:antialiased;-webkit-overflow-scrolling:touch}h1,h2,h3,h4,h5,h6{font-weight:300;color:#333}.dropdown-item,.panel h3,a{font-weight:400}p{line-height:28px}a{color:#c0392b}.author-icon,.panel-heading .resource-info{display:inline-block}.main.container{margin-top:40px}#headerwrap{border-bottom:#fff solid 5px;background:url(/assets/img/header.jpg);background-size:cover;position:relative}#headerwrap .container{padding:60px 15px}#headerwrap h1{color:#666;font-size:70px}#headerwrap h3{color:#666;font-size:30px}.panel-modern{background-color:#fff;box-shadow:inset 0 0 0 1px #fff,rgba(0,0,0,.03) 0 2px 0;width:100%;border-radius:3px;border:0;position:relative}.panel-modern .panel-heading{color:#717a8f;padding:10px 20px;border-bottom:1px solid #E5E5E5;border-top-left-radius:3px;border-top-right-radius:3px;line-height:20px}.panel-modern .panel-heading h4{color:#717a8f}.author-icon{width:41px;height:41px;border-radius:50%;border:3px solid #fbfbfb;margin-right:10px;vertical-align:top;background-size:cover}.panel-body{padding:20px;overflow:auto}.panel-footer{padding:10px 20px;border-top:1px solid #E5E5E5;display:none}#search_form{width:70%;position:relative}#search{width:100%;padding:12px 24px;margin:28px 0 3px;border-radius:8px;border:4px solid #fff;font-size:22px;color:#666;box-shadow:0 0 8px 0 rgba(0,0,0,.12)}.resource.expand .panel-footer{display:block}.resource .panel-body{cursor:pointer;max-height:160px;overflow:hidden}.map.resource img{width:120%;margin-left:-10%;margin-top:-50%}.resource .panel-body:after{background-size:100%;background-image:-webkit-gradient(linear,50% 0,50% 100%,color-stop(0,rgba(255,255,255,0)),color-stop(100%,#fff));background-image:-webkit-linear-gradient(rgba(255,255,255,0),#fff);background-image:-moz-linear-gradient(rgba(255,255,255,0),#fff);background-image:-o-linear-gradient(rgba(255,255,255,0),#fff);background-image:-ms-linear-gradient(rgba(255,255,255,0),#fff);background-image:linear-gradient(rgba(255,255,255,0),#fff);content:"";width:100%;border-radius:3px;position:absolute;top:auto;right:0;bottom:0;height:70px;pointer-events:none}.verse .panel-body{position:relative;min-height:160px}.verse .panel-body a{font-weight:300;color:#555}.next-verse,.prev-verse{color:inherit!important;opacity:.2}.next-verse svg,.prev-verse svg{width:40px;height:40px}.prev-verse{float:left}.next-verse{float:right}.open-menu{position:absolute;left:23px;top:46px;color:#C8C8C8}.open-menu svg{width:28px;height:28px}@media only screen and (max-width:500px){#search_form{width:100%}#search{border:none;border-radius:4px;padding-left:50px;margin-bottom:0;margin-top:14px}.open-menu{top:29px;left:15px;font-size:26px}#headerwrap{border-bottom:none;background:#61a4cc}#headerwrap .container{padding:20px 15px 0}#headerwrap h1{font-size:40px;color:#fff;text-align:center}#headerwrap h3,.nav-main,.navbar{display:none}}@media only screen and (max-width:400px){#headerwrap h1{font-size:28px}}@media only screen and (min-width:501px){#headerwrap:before,body #headerwrap::after{content:"";position:absolute}body #headerwrap::after{top:0;left:0;right:0;height:0;background-color:rgba(255,255,255,.5);opacity:0;transition:height 0s,opacity .3s ease}#headerwrap:before{height:100%;width:100%;display:block;background:linear-gradient(to right,rgba(255,255,255,.79) 20%,rgba(255,255,255,.6) 60%,rgba(255,255,255,0) 95%)}.open-menu{display:none}}.tsk-panel .head{font-weight:700;font-style:italic;clear:both;padding-top:15px}.tsk-panel .head:first-child{padding-top:0}.tskref{float:left;width:50%}.dropdown-toggle::after,.dropup .dropdown-toggle::after{width:0;height:0;vertical-align:.255em;content:""}.dropdown,.dropleft,.dropright,.dropup{position:relative}.dropdown-toggle::after{display:inline-block;margin-left:.255em;border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu-right{right:0;left:auto}.dropup .dropdown-menu{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;margin-left:.255em;border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropleft .dropdown-toggle::before,.dropright .dropdown-toggle::after{width:0;content:"";border-top:.3em solid transparent;border-bottom:.3em solid transparent;height:0}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-menu{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropright .dropdown-toggle::after{display:inline-block;margin-left:.255em;border-right:0;border-left:.3em solid;vertical-align:0}.dropright .dropdown-toggle:empty::after{margin-left:0}.dropleft .dropdown-menu{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropleft .dropdown-toggle::after{width:0;height:0;margin-left:.255em;vertical-align:.255em;content:"";display:none}.dropleft .dropdown-toggle::before{display:inline-block;margin-right:.255em;border-right:.3em solid;vertical-align:0}.dropleft .dropdown-toggle:empty::after{margin-left:0}.dropdown-menu[x-placement^=top],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=bottom],.dropdown-menu[x-placement^=left]{right:auto;bottom:auto}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#f8f9fa}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff}.dropdown-item.disabled,.dropdown-item:disabled{color:#6c757d;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1.5rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1.5rem;color:#212529}.collapse:not(.show){display:none}.m-auto{margin:auto!important}#menu{width:220px;position:fixed;left:-240px;top:0;bottom:0}section#lexicon{visibility:hidden;height:0;position:fixed}.nav-main{background-color:#61a4cc}h2{text-align:center;margin-bottom:10px;color:#717a8f}.panel h3{color:#555;font-size:1.4rem;margin:5px 0}.history-toggle:after{display:none!important}</style>
</head>
<body>
	<section id="menu">
		<header><h3><b>BibleTools</b>.info</h3></header>
		<ul class="main">
			<li><a href="/"><svg class="icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 00 580 580"><path fill="currentColor" d="M557.1 240.7L512 203.8V104c0-4.4-3.6-8-8-8h-32c-4.4 0-8 3.6-8 8v60.5L313.4 41.1c-14.7-12.1-36-12.1-50.7 0L18.9 240.7c-3.4 2.8-3.9 7.8-1.1 11.3l20.3 24.8c2.8 3.4 7.8 3.9 11.3 1.1l14.7-12V464c0 8.8 7.2 16 16 16h168c4.4 0 8-3.6 8-8V344h64v128c0 4.4 3.6 8 8 8h168c8.8 0 16-7.2 16-16V265.8l14.7 12c3.4 2.8 8.5 2.3 11.3-1.1l20.3-24.8c2.6-3.4 2.1-8.4-1.3-11.2zM464 432h-96V304c0-4.4-3.6-8-8-8H216c-4.4 0-8 3.6-8 8v128h-96V226.5l170.9-140c2.9-2.4 7.2-2.4 10.1 0l170.9 140V432z" class=""></path></svg>Home</a></li>
			<li><a class="donate" href="/donate"><svg class="icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 580 580"><path fill="currentColor" d="M551.9 312c-31.1-26.4-69.3-16.1-88.4-1.8l-60.4 45.5h-3.3c-.2-38-30.5-67.8-69.2-67.8h-144c-28.4 0-56.3 9.4-78.5 26.3L79.8 336H16c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h80l41.3-31.5c14-10.7 31.4-16.5 49.4-16.5h144c27.9 0 29.1 40.2-1.1 40.2h-59.8c-7.6 0-13.8 6.2-13.8 13.8v.1c0 7.6 6.2 13.8 13.8 13.8h134.5c9.7 0 19.2-3.2 26.9-9l61.3-46.1c8.3-6.2 20.5-6.7 28.4 0 10.1 8.5 9.3 23.1-.9 30.7L419.4 455c-7.8 5.8-17.2 9-26.9 9H16c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h376.8c19.9 0 39.3-6.5 55.2-18.5l100.8-75.9c16.6-12.5 26.5-31.5 27.1-52 .7-20.5-8.1-40.1-24-53.6zM257.6 144.3l50.1 14.3c3.6 1 6.1 4.4 6.1 8.1 0 4.6-3.8 8.4-8.4 8.4h-32.8c-3.6 0-7.1-.8-10.3-2.2-4.8-2.2-10.4-1.7-14.1 2l-17.5 17.5c-5.3 5.3-4.7 14.3 1.5 18.4 9.5 6.3 20.4 10.1 31.8 11.5V240c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16v-17.6c30.3-3.6 53.4-31 49.3-63-2.9-23-20.7-41.3-42.9-47.7l-50.1-14.3c-3.6-1-6.1-4.4-6.1-8.1 0-4.6 3.8-8.4 8.4-8.4h32.8c3.6 0 7.1.8 10.3 2.2 4.8 2.2 10.4 1.7 14.1-2l17.5-17.5c5.3-5.3 4.7-14.3-1.5-18.4-9.5-6.3-20.4-10.1-31.8-11.5V16c0-8.8-7.2-16-16-16h-16c-8.8 0-16 7.2-16 16v17.6c-30.3 3.6-53.4 31-49.3 63 2.9 23 20.6 41.3 42.9 47.7z" class=""></path></svg>Donate</a></li>
			<li>
				<a class="history"><svg class="icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 580 580"><path fill="currentColor" d="M504 255.532c.252 136.64-111.182 248.372-247.822 248.468-64.014.045-122.373-24.163-166.394-63.942-5.097-4.606-5.3-12.543-.443-17.4l16.96-16.96c4.529-4.529 11.776-4.659 16.555-.395C158.208 436.843 204.848 456 256 456c110.549 0 200-89.468 200-200 0-110.549-89.468-200-200-200-55.52 0-105.708 22.574-141.923 59.043l49.091 48.413c7.641 7.535 2.305 20.544-8.426 20.544H26.412c-6.627 0-12-5.373-12-12V45.443c0-10.651 12.843-16.023 20.426-8.544l45.097 44.474C124.866 36.067 187.15 8 256 8c136.811 0 247.747 110.781 248 247.532zm-167.058 90.173l14.116-19.409c3.898-5.36 2.713-12.865-2.647-16.763L280 259.778V116c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v168.222l88.179 64.13c5.36 3.897 12.865 2.712 16.763-2.647z" class=""></path></svg>History</a>
				<ul class="history-list">
					<?php foreach( $history as $key => $item ) { ?>
						<li><a href="/<?php echo $key; ?>" class="dropdown-item ref-link"><?php echo $item; ?></a></li>
					<?php } ?>
				</ul>
			</li>
			<!--<li><i class="fa fa-heart"></i><a>Favorites</a></li>-->
		</ul>
		<hr/>
		<ul class="sub">
			<li><a href="/about/feedback">Send Feedback</a></li>
			<li><a href="/about/info">About</a></li>
		</ul>
		<hr/>
		<ul class="sub">
			<li class="contrast-mode"><a href="javascript:void(0)">Contrast Mode</a></li>
		</ul>
	</section>
	<nav class="navbar nav-main navbar-expand-sm navbar-dark">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="/">BibleTools.info</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?php if( isset( $active_tab ) && $active_tab == "verses" ) { echo "active"; } ?>">
						<a class="nav-link" href="/">Verses</a>
					</li>
					<li class="nav-item <?php if( isset( $active_tab ) && $active_tab == "about" ) { echo "active"; } ?>">
						<a class="nav-link" href="/about/info">About</a>
					</li>
					<li class="nav-item <?php if( isset( $active_tab ) && $active_tab == "feedback" ) { echo "active"; } ?>">
						<a class="nav-link" href="/about/feedback">Feedback</a>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="nav-link dropdown-toggle history-toggle" href="javascript:void(0)" data-toggle="dropdown"><svg role="img" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle" width="18" height="18" viewBox="0 0 512 512"><path fill="currentColor" d="M20 24h10c6.627 0 12 5.373 12 12v94.625C85.196 57.047 165.239 7.715 256.793 8.001 393.18 8.428 504.213 120.009 504 256.396 503.786 393.181 392.834 504 256 504c-63.926 0-122.202-24.187-166.178-63.908-5.113-4.618-5.354-12.561-.482-17.433l7.069-7.069c4.503-4.503 11.749-4.714 16.482-.454C150.782 449.238 200.935 470 256 470c117.744 0 214-95.331 214-214 0-117.744-95.331-214-214-214-82.862 0-154.737 47.077-190.289 116H164c6.627 0 12 5.373 12 12v10c0 6.627-5.373 12-12 12H20c-6.627 0-12-5.373-12-12V36c0-6.627 5.373-12 12-12zm321.647 315.235l4.706-6.47c3.898-5.36 2.713-12.865-2.647-16.763L272 263.853V116c0-6.627-5.373-12-12-12h-8c-6.627 0-12 5.373-12 12v164.147l84.884 61.734c5.36 3.899 12.865 2.714 16.763-2.646z" class=""></path></svg></a>
							<ul class="dropdown-menu dropdown-menu-right history-list">
								<?php foreach( $history as $key => $item ) { ?>
									<li><a class="dropdown-item ref-link" href="/<?php echo $key; ?>"><?php echo $item; ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<?php if( $is_admin ) { ?>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="/admin/dashboard">Dashboard</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/admin/question">Add Question</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<?php } ?>
	<div id="headerwrap">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-lg-12">
					<h1><b>BibleTools</b>.info</h1>
					<h3>Bible Verse Explanations and Resources</h3>	
					<form action="." id="search_form">			
						<input type="text" id="search" autocomplete="off" autocorrect="off" placeholder="Type a reference"/>
						<a id="clear" class="hidden"><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm101.8-262.2L295.6 256l62.2 62.2c4.7 4.7 4.7 12.3 0 17l-22.6 22.6c-4.7 4.7-12.3 4.7-17 0L256 295.6l-62.2 62.2c-4.7 4.7-12.3 4.7-17 0l-22.6-22.6c-4.7-4.7-4.7-12.3 0-17l62.2-62.2-62.2-62.2c-4.7-4.7-4.7-12.3 0-17l22.6-22.6c4.7-4.7 12.3-4.7 17 0l62.2 62.2 62.2-62.2c4.7-4.7 12.3-4.7 17 0l22.6 22.6c4.7 4.7 4.7 12.3 0 17z" class=""></path></svg></a>
						<a class="open-menu"><svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></a>
						<div class="search-results hidden">
							<ul>
								<li class="heading">Suggestion</li>
							</ul>
						</div>
					</form>
					<br>
	    		</div>
	    	</div>
	    </div> <!--/ .container -->
	</div><!--/ #headerwrap -->
	<section id="lexicon" class="col-sm-5">
		<div class="content">
			<span class="arrow"></span>
			<span class="close"></span>
			<div class="definition">Loading...</div>
		</div>
	</section>
	<div class="container main">
		
		<?php echo $contents; ?>
		<footer class="main">
			<div class="text">BibleTools.info is a supporting ministry of the Seventh-day Adventist Church</div>
			<div class="contrast-mode"><a href="javascript:void(0)">Contrast Mode</a></div>
		</footer>
	</div>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic' rel='stylesheet' type='text/css'>
	<?php if( ENVIRONMENT == "production" ) { ?>
		<link href="/assets/app.min.css?v=3.9" rel="stylesheet">
		<script defer type="text/javascript" src="/assets/app.min.js?v=3.9"></script>
	<?php } else { ?>
		<link href="/assets/css/lib.css?v=1" rel="stylesheet">
		<link href="/assets/css/custom.css?v=3" rel="stylesheet">
		<script defer type="text/javascript" src="/assets/js/lib.js"></script>
		<script defer type="text/javascript" src="/assets/js/custom.js?v=5"></script>
	<?php } ?>
</body>
</html>
