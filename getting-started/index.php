<?php
	global $page;

	$page['title'] = 'Getting Started';
	$page['lead'] = 'Overview of GA Event Tracker, how to download, use and configure.';
	$page['description'] = 'Overview of GA Event Tracker, how to download, use and configure.';

	require_once( '../includes/header.php' );
?>

<div class="container">
<div class="row">
<div class="col-md-9">

<h2 id="install">Installation</h2>

<p>The jquery.ga-events.js plugin is dependent on the following additional libraries:</p>

<ol>
	<li><a href="">jQuery</a> version 1.4.3 or greater</li>
	<li>Google Analytics <a href="">ga.js (classic)</a> or <a href="">analytics.js (universal)</a></li>
</ol>

<p>Installing the script is easy, simply <a href="">download the latest version of jquery.ga-events.js</a> and include the script after jQuery and the Google Analytics tracking code.</p>

<div class="bs-example"></div>

<div class="highlight">
<pre class="prettyprint">
<code>&lt;script&gt;

    // Classic Analytics
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-XX']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    // Universal Analytics
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXXXXX-XX', 'auto');
    ga('send', 'pageview');

&lt;/script&gt;

&lt;!-- include jQuery library from Google CDN --&gt;
&lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;

&lt;!-- inlcude jquery.ga-events.js --&gt;
&lt;script src="path/to/jquery.ga-events.js"&gt;&lt;/script&gt;</code>
</pre>
</div>

<h2 id="initialization">Initialization</h2>

<h4>data-attributes</h4>

<p>By default jquery.ga-track.js will automatically target any <code>&lt;a&gt;, &lt;button&gt;, &lt;input&gt;, &lt;textarea&gt;, &lt;select&gt;</code> elements with the <code>data-ga-track</code> attribute present.</p>

<p>You can configure the events: category, action, label, value and non-interaction values by configuring additional data-attributes on the element you wish to track: <code>data-ga-category, data-ga-action, data-ga-label, data-ga-value, data-ga-nonint</code></p>

<div class="bs-example"></div>
<div class="highlight">
<pre class="prettyprint">
<code>&lt;a href="http://www.google.com"
    data-ga-trigger="click"
    data-ga-category="My Category"
    data-ga-action="My Action"
    data-ga-label="My Label"
    data-ga-value="1234"
    data-ga-nonint="true" data-ga-track&gt;Link Text&lt;/a&gt;

&lt;script&gt;

    // ga.js equivalent
    _gaq.push(['_trackEvent', 'My Category', 'My Action', 'My Label', 1234, true]);

    // analytics.js equivalent
    ga('send', 'event', 'My Category', 'My Action', 'My Label', 1234, { 'nonInteraction' : true });

&lt;/script&gt;
</code>
</pre>
</div>

<h4>jQuery object</h4>

<p>If needed, you can also initialize jquery.ga-track.js on a traditional jQuery object. This is useful for mass targeting links. To track the clicks of all <code>&lt;a class="btn"&gt;</code> elements you could initialize a jQuery object like so:</p>

<div class="bs-example"></div>
<div class="highlight">
<pre class="prettyprint">
<code>&lt;script&gt;
$('a.btn').gatrack({
    'trigger'  : 'click',
    'category' : 'My Category',
    'action'   : 'My Action',
    'label'    : 'My Label',
    'value'    : 1234,
    'nonint'   : true
});
&lt;/script&gt;
</code>
</pre>
</div>

</div><!-- end left-column -->

            <aside class="col-md-3">
                <div class="bs-docs-sidebar hidden-print affix-top" role="complementary">
                    <ul class="nav bs-docs-sidenav">
                        <li class="active"><a href="#install">Installation</a></li>
                        <li><a href="#initialization">Initialization</a></li>
                        <li><a href="#fallback-settings">Fallback Settings</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
<?php require_once( '../includes/footer.php' ); ?>