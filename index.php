<html>
<head>
<meta http-equiv="expires" content="0"></meta>
<title>Cal's GitHub Stuff</title>
<style>

body {
	text-align: center;
	margin: 0;
	padding: 0;
	background-color: #f5f5f5;
}

#main {
	width: 800px;
	margin: 0 auto;
	text-align: left;
	padding: 1em 1em 5em 1em;
	border-left: 1px solid #999;
	border-right: 1px solid #999;
	background-color: #fff;
	font-family: Helvetica, Arial, sans-serif;
}

h1 {
	margin-top: 0;
}

h2 {
	margin-top: 1.5em;
}

#col1, #col2 { width: 50%; float: left; }
#col1 div { padding-right: 20px; }
#col2 div { padding-left: 20px; }


</style>
</head>
<body>

<?
	$nav = 'github';
	include('/var/www/cal/iamcal.com/templates/universal_nav.txt');
?>

<div id="main">

<h1>Cal's GitHub Stuff</h1>

<p>
My stuff on github is split between <a href="https://github.com/iamcal">my personal account</a>,
the <a href="https://github.com/exflickr">ex-flickr organization</a> and 
the <a href="https://github.com/tinyspeck">tinyspeck organization</a>.
Ex-flickr is a group of projects created by engineers who once worked at 
<a href="http://www.flickr.com">Flickr</a> and follow the <i>Flickr way</i>, based on the 
lessons we learned over 6+ years of engineering a very large web app.
<a href="http://www.tinyspeck.com/">TinySpeck</a> is the company I now work for, 
building <a href="http://www.glitch.com">Glitch</a>, a web-based massively-multiplayer online game.
</p>


<div id="col1"><div>

	<h2>PHP Libraries</h2>
	<ul>
		<li><a href="https://github.com/exflickr/flamework">Flamework</a>: a PHP application framework.</li>
		<li><a href="https://github.com/iamcal/php-emoji">PHP-emoji</a>: an emoji filtering and transformation library.</li>
		<li><a href="https://github.com/iamcal/lib_oauth">lib_oauth</a>: PHP4 OAuth library.</li>
		<li><a href="https://github.com/iamcal/lib_sanitize">lib_sanitize</a>: Input validation library.</li>
		<li><a href="https://github.com/iamcal/lib_autolink">lib_autolink</a>: Change URLs in input text into HTML links.</li>
		<li><a href="https://github.com/iamcal/lib_filter">lib_filter</a>: Whitelist HTML input filtering.</li>
		<li><a href="https://github.com/iamcal/rfc822">RFC822</a>: Email validation for RFCs 822, 2822 and 3696.</li>
		<li><a href="https://github.com/iamcal/lib_ap">lib_ap</a>: Admin Protocol library.</li>
		<li><a href="https://github.com/iamcal/XML_NiceTree">XML_NiceTree</a>: PHP4 xpath-like library.</li>
	</ul>

	<h2>Single Sign-On</h2>
	<ul>
		<li><a href="https://github.com/exflickr/GodAuth">GodAuth</a>: Simple SSO for internal tools.</li>
		<li><a href="https://github.com/iamcal/MediaWiki-SSO">MediaWiki-SSO</a>: SSO plugin for MediaWiki.</li>
		<li><a href="https://github.com/iamcal/Trac-SSO">Trac-SSO</a>: SSO plugin for Trac.</li>
		<li><a href="https://github.com/iamcal/WordPress-SSO">WordPress-SSO</a>: SSO plugin for WordPress.</li>

	</ul>

	<h2>Flickr</h2>
	<p>All of these projects were previously hosted in Flickr's SVN repository, which has unfortunately been offline for several years.</p>
	<ul>
		<li><a href="https://github.com/iamcal/uploadr">Uploadr</a>: Desktop photo uploader.</li>
		<li><a href="https://github.com/iamcal/Flickr-Test">Flickr::Test</a>: A PHP/Perl TAP test framework.</li>
		<li><a href="https://github.com/iamcal/Flickr-StatsD">Flickr::StatsD</a>: Collect and aggregate realtime stats.</li>
		<li><a href="https://github.com/iamcal/lib_xml">lib_xml</a>: Lightweight XPath-like library.</li>
		<li><a href="https://github.com/iamcal/lib_input">lib_input</a>: Input filtering library.</li>
		<li><a href="https://github.com/iamcal/desktopr">desktopr</a>: Next generation version of Uploadr.</li>
		<li><a href="https://github.com/iamcal/clustr">clustr</a>: Geo shape clustering application.</li>
		<li><a href="https://github.com/iamcal/Flickr-FTPD">Flickr-FTPD</a>: FTP upload endpoint handler.</li>
	</ul>

	<h2>Perl Modules</h2>
	<ul>
		<li><a href="https://github.com/iamcal/perl-CSS">CSS</a>: Object-oriented access to cascading stylesheets.</li>
		<li><a href="https://github.com/iamcal/perl-Parse-EBNF">Parse::EBNF</a>: Object-oriented access to EBNF grammars.</li>
		<li><a href="https://github.com/iamcal/perl-XML-Parser-Lite-Tree">XML::Parser::Lite::Tree</a>: Parse XML trees without libxml or expat.</li>
		<li><a href="https://github.com/iamcal/perl-XML-Parser-Lite-Tree-XPath">XML::Parser::Lite::Tree::XPath</a>: Pure Perl XPath implementation.</li>
		<li><a href="https://github.com/iamcal/perl-Flickr-API">Flickr::API</a>: Perl interface to the Flickr API.</li>
		<li><a href="https://github.com/iamcal/perl-Language-Homespring">perl-Language-Homespring</a>: Homespring interpreter.</li>
		<li><a href="https://github.com/iamcal/perl-Language-Homespring-Visualise-GraphViz">perl-Language-Homespring-Visualise-GraphViz</a>: Vizualizations for Homespring.</li>
		<li><a href="https://github.com/iamcal/perl-Language-Nouse">perl-Language-Nouse</a>: Nouse interpreter.</li>
		<li><a href="https://github.com/iamcal/perl-Inline-Interp">perl-Inline-Interp</a>: Make Inline modules for interpreted languages.</li>
		<li><a href="https://github.com/iamcal/perl-Inline-Nouse">perl-Inline-Nouse</a>: Nouse Inline interpreter.</li>
		<li><a href="https://github.com/iamcal/perl-Inline-SMITH">perl-Inline-SMITH</a>: SMITH Inline interpreter.</li>
		<li><a href="https://github.com/iamcal/perl-Image-Caa">perl-Image-Caa</a>: Colored ASCII-art.</li>
	</ul>

	<h2>Misc Cruft</h2>
	<ul>
		<li><a href="https://github.com/iamcal/Choropleths">Choropleths</a>: Quick tool for making choropleth maps.</li>
		<li><a href="https://github.com/iamcal/php-tokyo-dystopia">php-tokyo-dystopia</a>: Added some docs for this PHP extension.</li>
		<li><a href="https://github.com/iamcal/oembed">oEmbed</a>: Spec for oEmbed.</li>
		<li><a href="https://github.com/iamcal/lego-carcassonne">Lego Carcassonne</a>: Lego CAD designs for Carcassonne.</li>
		<li><a href="https://github.com/iamcal/g2">g2</a>: Interface experiments for Ganglia.</li>
	</ul>

</div></div>
<div id="col2"><div>

	<h2>Node Libraries</h2>
	<ul>
		<li><a href="https://github.com/iamcal/node-mysql">node-mysql</a>: My fork for hacking on MySQL Node bindings. Just use the <a href="https://github.com/felixge/node-mysql">main repo</a> instead.</li>
		<li><a href="https://github.com/iamcal/daemon.node">daemon.node</a>: Collection of patches for running Node as a daemon.</li>
		<li><a href="https://github.com/iamcal/node-memcache">node.memcache</a>: Memcache bindings for Node.</li>
		<li><a href="https://github.com/iamcal/http_utils.js">http_utils.js</a>: A simple HTTP wrapper for Node that handles GET/POST vars and file uploads.</li>
		<li><a href="https://github.com/iamcal/service.js">service.js</a>: Easily turn node apps into init.d services.</li>
	</ul>

	<h2>Node Apps</h2>
	<ul>
		<li><a href="https://github.com/iamcal/logTailer">logTailer</a>: Tail log files in real time over the web.</li>
		<li><a href="https://github.com/iamcal/rollup">rollup</a>: Collect and graph high-volume realtime stats.</li>
		<li><a href="https://github.com/tinyspeck/logbot">logbot</a>: Simple IRC bot.</li>
		<li><a href="https://github.com/iamcal/logSmush">logSmush</a>: Multi-server log aggregation over HTTP.</li>
	</ul>

	<h2>Glitch</h2>
	<ul>
		<li><a href="https://github.com/iamcal/glitch-oauth-demos">Glitch OAuth Demos</a>: Demo code for implementing against the Glitch OAuth API.</li>
		<li><a href="https://github.com/tinyspeck/glitch-mash">glitch-mash</a>: Demo API app.</li>
		<li><a href="https://github.com/tinyspeck/avatar-animations">avatar-animations</a>: JavaScript/Canvas avatar animation preview.</li>
	</ul>

	<h2>TinySpeck Tools</h2>
	<ul>
		<li><a href="https://github.com/tinyspeck/statsd">statsd</a>: TinySpeck's StatsD fork.</li>
		<li><a href="https://github.com/tinyspeck/graphite-render">graphite-render</a>: Time sampling visualization for Graphite.</li>
		<li><a href="https://github.com/tinyspeck/doug">doug</a>: A simple bug tracker.</li>
	</ul>


	<h2>Misc Apps</h2>
	<ul>
		<li><a href="https://github.com/iamcal/iTunesServer">iTunesServer</a>: Play your music collection over the web.</li>
		<li><a href="https://github.com/iamcal/iTunesRemote">iTunesRemote</a>: Control a remote iTunes instance over the web.</li>
		<li><a href="https://github.com/iamcal/PNGStore">PNGStore</a>: Compress CSS/JS into PNGs.</li>
		<li><a href="https://github.com/iamcal/sycamore">Sycamore</a>: A game prototype.</li>
		<li><a href="https://github.com/iamcal/flengbot">Flengbot</a>: Group messaging Jabber bot.</li>
		<li><a href="https://github.com/tinyspeck/imgproc">imgproc</a>: Simple web-based tool to test image processing utilities.</li>
		<li><a href="https://github.com/tinyspeck/logbot-perl">logbot-perl</a>: IRC logging and reporting bot, written in perl.</li>
		<li><a href="https://github.com/iamcal/brainfuck-debug">brainfuck-debug</a>: JavaScript brainfuck debugger.</li>

	</ul>

	<h2>WoW Addons</h2>
	<ul>
		<li><a href="https://github.com/iamcal/Precedence">Precedence</a>: A dashboard for raiding hunters.</li>
		<li><a href="https://github.com/iamcal/Bunny-Hunter">Bunny-Hunter</a>: Rare pet farming tracker.</li>
		<li><a href="https://github.com/iamcal/MillHouse">MillHouse</a>: Summarize herbs ready for milling.</li>
		<li><a href="https://github.com/iamcal/Auc-Searcher-Insane">Auc-Searcher-Insane</a>: Auctioneer plugin for search for Darkmoon Faire rep items.</li>
		<li><a href="https://github.com/iamcal/Non-Compos-Mentis">Non-Compos-Mentis</a>: Tracking for the [Insane in the Membrane] achievement.</li>
	</ul>

	<h2>Web Sites</h2>
	<ul>
		<li><a href="https://github.com/iamcal/londonbloggers">London Bloggers</a>: A new version of the London Bloggers directory.</li>
	</ul>

</div></div>

<br clear="all"/>
&nbsp;

</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-106458-1");
pageTracker._setDomainName("iamcal.github.com");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
