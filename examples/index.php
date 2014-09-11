<?php
	global $page_title;

	$page['title'] = 'Examples';
	$page['lead'] = 'Detailed examples and use cases.';
	$page['description'] = 'Detailed examples and use cases.';

	require_once( '../includes/header.php' );
?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2 id="click">Click</h2>

                <div class="bs-example">
                    <p><a class="track-it click" href="http://www.google.com">Example 1 (Using Fallbacks)</a></p>

                    <p><a class="track-it click" href="http://www.google.com" data-ga-delay="true" data-ga-category="Click Events" data-ga-action="Clicked Outbound Link" data-ga-value="9999">Example 2 (Using Custom Values)</a></p>
                </div>

<div class="highlight">
<pre class="prettyprint">
<code>
&lt;a class="track-it click" href="http://www.google.com"&gt;Example 1 (Using Fallbacks)&lt;/a&gt;

&lt;a href="http://www.google.com"
	data-ga-track
	data-ga-category="Click Events"
	data-ga-action="Clicked Outbound Link"
	data-ga-label="Google"&gt;
	Example 2 (Using Custom Values)
&lt;/a&gt;

&lt;script&gt;
$('.track-it.click').gaeventtracker({
	'ga_type'  : 'all',
	'trigger'  : 'click',
	'category' : 'Click Fallback Category',
	'action'   : 'Click Fallback Action',
	'value'    : 1111,
	'nonint'   : false,
	'delay'    : true,
	'debug'    : {
					'status' : true,
					'type'   : 'alert'
				 }
});
&lt;/script&gt;
</code>
</pre>
</div>

                <h2 id="focus">Focus</h2>

                <div class="bs-example">
                    <form>
                        <div class="form-group">
                            <label>Email Address (Using Fallbacks)</label> <input type="email" class="form-control track-it focus">
                        </div>

                        <div class="form-group">
                            <label>Phone Number (Using Custom Values)</label> <input type="text" class="form-control track-it focus" data-ga-category="Form Field Focus Events" data-ga-action="Focused Field" data-ga-label="Phone Number">
                        </div>
                    </form>
                </div>

                <div class="highlight">
                    <pre class="prettyprint">
                        <code>&lt;form&gt;
                          &lt;div class="form-group"&gt;
                            &lt;label&gt;Email Address (Using Fallbacks)&lt;/label&gt;
                            &lt;input type="email" class="form-control track-it focus"&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group"&gt;
                            &lt;label&gt;Phone Number (Using Custom Values)&lt;/label&gt;
                            &lt;input type="text" class="form-control track-it focus"
                               data-ga-category="Form Field Focus Events"
                               data-ga-action="Focused Field"
                               data-ga-label="Phone Number"&gt;
                          &lt;/div&gt;
                        &lt;/form&gt;

                        &lt;script&gt;
                        $('.track-it.focus').gaeventtracker({
                          'ga_type'  : 'all',
                          'trigger'  : 'focus',
                          'category' : 'Focus Fallback Category',
                          'action'   : 'Focus Fallback Action',
                          'value'    : 4444,
                          'nonint'   : true,
                          'delay'    : false,
                          'debug'    : {
                            'status' : true,
                            'type'   : 'console'
                          }
                        });
                        &lt;/script&gt;</code>
					</pre>
                </div>

                <h2 id="blur">Blur</h2>

                <div class="bs-example">
                    <form>
                        <div class="form-group">
                            <label>Email Address (Using Fallbacks)</label> <input type="email" class="form-control track-it blur">
                        </div>

                        <div class="form-group">
                            <label>Phone Number (Using Custom Values)</label> <input type="text" class="form-control track-it blur" data-ga-category="Form Field Blur Events" data-ga-action="Blurred Field" data-ga-label="Phone Number">
                        </div>
                    </form>
                </div>

                <div class="highlight">
                    <pre class="prettyprint">
                        <code>&lt;form&gt;
                          &lt;div class="form-group"&gt;
                            &lt;label&gt;Email Address (Using Fallbacks)&lt;/label&gt;
                            &lt;input type="email" class="form-control track-it blur"&gt;
                          &lt;/div&gt;
                          &lt;div class="form-group"&gt;
                            &lt;label&gt;Phone Number (Using Custom Values)&lt;/label&gt;
                            &lt;input type="text" class="form-control track-it blur"
                               data-ga-category="Form Field Blur Events"
                               data-ga-action="Blurred Field"
                               data-ga-label="Phone Number"&gt;
                          &lt;/div&gt;
                        &lt;/form&gt;

                        &lt;script&gt;
                        $('.track-it.blur').gaeventtracker({
                          'ga_type'  : 'all',
                          'trigger'  : 'blur',
                          'category' : 'Blur Fallback Category',
                          'action'   : 'Blur Fallback Action',
                          'value'    : 3333,
                          'nonint'   : true,
                          'delay'    : false,
                          'debug'    : {
                            'status' : true,
                            'type'   : 'console'
                          }
                        });
                        &lt;/script&gt;</code>
					</pre>
                </div>
            </div>

            <aside class="col-md-3">
                <div class="bs-docs-sidebar hidden-print affix-top" role="complementary">
                    <ul class="nav bs-docs-sidenav">
                        <li class="active"><a href="#click">Click Demo</a></li>

                        <li><a href="#focus">Focus Demo</a></li>

                        <li><a href="#blur">Blur Demo</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
<?php require_once( '../includes/footer.php' ); ?>