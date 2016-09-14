<!DOCTYPE html>
<!-- saved from url=(0042)https://gist.github.com/JeffreyWay/5112282 -->
<html lang="en" class=" is-copy-enabled is-u2f-enabled"><head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta content="origin-when-cross-origin" name="referrer">

    <link crossorigin="anonymous" href="./laravel_files/frameworks-6340907fbb4f7160ce9266a1b9167ab4df8a62790bdea1e26de1b3918da62416.css" integrity="sha256-Y0CQf7tPcWDOkmahuRZ6tN+KYnkL3qHibeGzkY2mJBY=" media="all" rel="stylesheet">
    <link crossorigin="anonymous" href="./laravel_files/github-20005947e98df6742b539f3bf53fee3fbd341ce7ae3c64d1005cedd814f05fdb.css" integrity="sha256-IABZR+mN9nQrU5879T/uP700HOeuPGTRAFzt2BTwX9s=" media="all" rel="stylesheet">
    
    
    
    

    <link as="script" href="./laravel_files/frameworks-88471af1fec40ff9418efbe2ddd15b6896af8d772f8179004c254dffc25ea490.js" rel="preload">
    
    <link as="script" href="./laravel_files/github-5c003fa4b821ad99dacae12e6bcdc88817ac76e4fdb7d2e14103c341ceb87ced.js" rel="preload">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    
    <title>Want to send a DELETE request when outside of a form? This will handle the form-creation bits for you dynamically, similar to the Rails implementation. (Requires jQuery, but doesn't have to.)

To use, import script, and create a link with the `data-method="DELETE"` attribute.</title>
    <link rel="search" type="application/opensearchdescription+xml" href="https://gist.github.com/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://gist.github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" href="https://gist.github.com/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="https://gist.github.com/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://gist.github.com/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://gist.github.com/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://gist.github.com/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://gist.github.com/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://gist.github.com/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://gist.github.com/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://gist.github.com/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://gist.github.com/apple-touch-icon-180x180.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="https://avatars2.githubusercontent.com/u/183223?v=3&amp;s=400" name="twitter:image:src"><meta content="@github" name="twitter:site"><meta content="summary" name="twitter:card"><meta content="Want to send a DELETE request when outside of a form? This will handle the form-creation bits for you dynamically, similar to the Rails implementation. (Requires jQuery, but doesn&#39;t have to.)

To use, import script, and create a link with the `data-method=&quot;DELETE&quot;` attribute." name="twitter:title"><meta content="Want to send a DELETE request when outside of a form? This will handle the form-creation bits for you dynamically, similar to the Rails implementation. (Requires jQuery, but doesn&#39;t have to.)

To..." name="twitter:description">
      <meta content="https://avatars2.githubusercontent.com/u/183223?v=3&amp;s=400" property="og:image"><meta content="Gist" property="og:site_name"><meta content="object" property="og:type"><meta content="Want to send a DELETE request when outside of a form? This will handle the form-creation bits for you dynamically, similar to the Rails implementation. (Requires jQuery, but doesn&#39;t have to.)

To use, import script, and create a link with the `data-method=&quot;DELETE&quot;` attribute." property="og:title"><meta content="https://gist.github.com/JeffreyWay/5112282" property="og:url"><meta content="Want to send a DELETE request when outside of a form? This will handle the form-creation bits for you dynamically, similar to the Rails implementation. (Requires jQuery, but doesn&#39;t have to.)

To..." property="og:description">
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="web-socket" href="wss://live.github.com/_sockets/NDQ1MzQ3MToyM2EzOTczZjFlYTc3YWYyY2U3MTEyYjRhOTVlMjEzMzpiM2Q0MmE3NzdlMjVmMjMyMzA3YWU1NWVjNWRjYzM4YmI1MjdmMzVlZjAzZTM3MDhiZTg1YTJkNDM3MzBmZjdl--176735e9a12a47c27e4f12e37efb9f162b8d4d65">
    <meta name="pjax-timeout" content="1000">
    <link rel="sudo-modal" href="https://gist.github.com/sessions/sudo_modal">
    <meta name="request-id" content="BE83D244:57C6:51F2B2:57D9CD4E" data-pjax-transient="">

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="gist_code" data-pjax-transient="">

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
<meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
    <meta name="google-analytics" content="UA-3769691-4">

<meta content="collector.githubapp.com" name="octolytics-host"><meta content="gist" name="octolytics-app-id"><meta content="BE83D244:57C6:51F2B2:57D9CD4E" name="octolytics-dimension-request_id"><meta content="4453471" name="octolytics-actor-id"><meta content="HayderEspinoza" name="octolytics-actor-login"><meta content="6b03e4f72e509a773367c499c7ce34bc86ac2a656d7e6c3a8866205cc56b4970" name="octolytics-actor-hash">
<meta content="/&lt;user-name&gt;/&lt;gist-id&gt;" data-pjax-transient="true" name="analytics-location">



  <meta class="js-ga-set" name="dimension1" content="Logged In">


    <meta content="true" name="octolytics-dimension-public"><meta content="5112282" name="octolytics-dimension-gist_id"><meta content="5112282" name="octolytics-dimension-gist_name"><meta content="false" name="octolytics-dimension-anonymous"><meta content="183223" name="octolytics-dimension-owner_id"><meta content="JeffreyWay" name="octolytics-dimension-owner_login"><meta content="false" name="octolytics-dimension-forked">

  <meta class="js-ga-set" name="dimension5" content="public">
  <meta class="js-ga-set" name="dimension6" content="owned">
  <meta class="js-ga-set" name="dimension7" content="javascript">



        <meta name="hostname" content="gist.github.com">
    <meta name="user-login" content="HayderEspinoza">

        <meta name="expected-hostname" content="gist.github.com">
      <meta name="js-proxy-site-detection-payload" content="N2UzZTUwYjQ2MGVjMTU3MjlkMjk1NmQ5OTcwYWFjYjIwNDhjZTM5N2E3ZmY4ODAxYjcxYzcwYjc1NDBjOTI2NHx7InJlbW90ZV9hZGRyZXNzIjoiMTkwLjEzMS4yMTAuNjgiLCJyZXF1ZXN0X2lkIjoiQkU4M0QyNDQ6NTdDNjo1MUYyQjI6NTdEOUNENEUiLCJ0aW1lc3RhbXAiOjE0NzM4OTE2NjN9">


      <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

    <meta name="html-safe-nonce" content="8593aa5b8ceba1993960c8fed09f760e4fcf8ff0">
    <meta content="085ad7bdf6993d942e717fbf4a43515660a734c4" name="form-nonce">

    <meta http-equiv="x-pjax-version" content="7e7ec6f1e1349f0cc8ca0fb7398b6817">
    

        <link href="https://gist.github.com/JeffreyWay.atom" rel="alternate" title="atom" type="application/atom+xml">
  
  <link crossorigin="anonymous" href="./laravel_files/gist-8023a6701460564568375656828f60112d6894587d6f9a03b77d18a97f6d8fc6.css" integrity="sha256-gCOmcBRgVkVoN1ZWgo9gES1olFh9b5oDt30YqX9tj8Y=" media="all" rel="stylesheet">


  </head>


  <body class="logged-in  env-production windows">
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>
    <a href="https://gist.github.com/JeffreyWay/5112282#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>

    
    
    



        <div class="header gist-header header-logged-in" role="banner">
  <div class="container clearfix">

    <a href="https://gist.github.com/" aria-label="Gist Homepage" class="header-logo-wordmark" data-hotkey="g d">
      <svg aria-hidden="true" class="octicon octicon-logo-github" height="28" version="1.1" viewBox="0 0 45 16" width="78"><path d="M18.53 12.03h-.02c.009 0 .015.01.024.011h.006l-.01-.01zm.004.011c-.093.001-.327.05-.574.05-.78 0-1.05-.36-1.05-.83V8.13h1.59c.09 0 .16-.08.16-.19v-1.7c0-.09-.08-.17-.16-.17h-1.59V3.96c0-.08-.05-.13-.14-.13h-2.16c-.09 0-.14.05-.14.13v2.17s-1.09.27-1.16.28c-.08.02-.13.09-.13.17v1.36c0 .11.08.19.17.19h1.11v3.28c0 2.44 1.7 2.69 2.86 2.69.53 0 1.17-.17 1.27-.22.06-.02.09-.09.09-.16v-1.5a.177.177 0 0 0-.146-.18zm23.696-2.2c0-1.81-.73-2.05-1.5-1.97-.6.04-1.08.34-1.08.34v3.52s.49.34 1.22.36c1.03.03 1.36-.34 1.36-2.25zm2.43-.16c0 3.43-1.11 4.41-3.05 4.41-1.64 0-2.52-.83-2.52-.83s-.04.46-.09.52c-.03.06-.08.08-.14.08h-1.48c-.1 0-.19-.08-.19-.17l.02-11.11c0-.09.08-.17.17-.17h2.13c.09 0 .17.08.17.17v3.77s.82-.53 2.02-.53l-.01-.02c1.2 0 2.97.45 2.97 3.88zm-8.72-3.61H33.84c-.11 0-.17.08-.17.19v5.44s-.55.39-1.3.39-.97-.34-.97-1.09V6.25c0-.09-.08-.17-.17-.17h-2.14c-.09 0-.17.08-.17.17v5.11c0 2.2 1.23 2.75 2.92 2.75 1.39 0 2.52-.77 2.52-.77s.05.39.08.45c.02.05.09.09.16.09h1.34c.11 0 .17-.08.17-.17l.02-7.47c0-.09-.08-.17-.19-.17zm-23.7-.01h-2.13c-.09 0-.17.09-.17.2v7.34c0 .2.13.27.3.27h1.92c.2 0 .25-.09.25-.27V6.23c0-.09-.08-.17-.17-.17zm-1.05-3.38c-.77 0-1.38.61-1.38 1.38 0 .77.61 1.38 1.38 1.38.75 0 1.36-.61 1.36-1.38 0-.77-.61-1.38-1.36-1.38zm16.49-.25h-2.11c-.09 0-.17.08-.17.17v4.09h-3.31V2.6c0-.09-.08-.17-.17-.17h-2.13c-.09 0-.17.08-.17.17v11.11c0 .09.09.17.17.17h2.13c.09 0 .17-.08.17-.17V8.96h3.31l-.02 4.75c0 .09.08.17.17.17h2.13c.09 0 .17-.08.17-.17V2.6c0-.09-.08-.17-.17-.17zM8.81 7.35v5.74c0 .04-.01.11-.06.13 0 0-1.25.89-3.31.89-2.49 0-5.44-.78-5.44-5.92S2.58 1.99 5.1 2c2.18 0 3.06.49 3.2.58.04.05.06.09.06.14L7.94 4.5c0 .09-.09.2-.2.17-.36-.11-.9-.33-2.17-.33-1.47 0-3.05.42-3.05 3.73s1.5 3.7 2.58 3.7c.92 0 1.25-.11 1.25-.11v-2.3H4.88c-.11 0-.19-.08-.19-.17V7.35c0-.09.08-.17.19-.17h3.74c.11 0 .19.08.19.17z"></path></svg>
      <svg aria-hidden="true" class="octicon octicon-logo-gist" height="28" version="1.1" viewBox="0 0 25 16" width="40"><path d="M4.7 8.73h2.45v4.02c-.55.27-1.64.34-2.53.34-2.56 0-3.47-2.2-3.47-5.05 0-2.85.91-5.06 3.48-5.06 1.28 0 2.06.23 3.28.73V2.66C7.27 2.33 6.25 2 4.63 2 1.13 2 0 4.69 0 8.03c0 3.34 1.11 6.03 4.63 6.03 1.64 0 2.81-.27 3.59-.64V7.73H4.7v1zm6.39 3.72V6.06h-1.05v6.28c0 1.25.58 1.72 1.72 1.72v-.89c-.48 0-.67-.16-.67-.7v-.02zm.25-8.72c0-.44-.33-.78-.78-.78s-.77.34-.77.78.33.78.77.78.78-.34.78-.78zm4.34 5.69c-1.5-.13-1.78-.48-1.78-1.17 0-.77.33-1.34 1.88-1.34 1.05 0 1.66.16 2.27.36v-.94c-.69-.3-1.52-.39-2.25-.39-2.2 0-2.92 1.2-2.92 2.31 0 1.08.47 1.88 2.73 2.08 1.55.13 1.77.63 1.77 1.34 0 .73-.44 1.42-2.06 1.42-1.11 0-1.86-.19-2.33-.36v.94c.5.2 1.58.39 2.33.39 2.38 0 3.14-1.2 3.14-2.41 0-1.28-.53-2.03-2.75-2.23h-.03zm8.58-2.47v-.86h-2.42v-2.5l-1.08.31v2.11l-1.56.44v.48h1.56v5c0 1.53 1.19 2.13 2.5 2.13.19 0 .52-.02.69-.05v-.89c-.19.03-.41.03-.61.03-.97 0-1.5-.39-1.5-1.34V6.94h2.42v.02-.01z"></path></svg>
</a>
    <div class="site-search js-site-search" role="search">
        <div class="header-search" role="search">

<!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="https://gist.github.com/search" class="position-relative" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"></div>
  <label class="header-search-wrapper form-control js-chromeless-input-container">
    <input type="text" class="form-control js-site-search-focus header-search-input js-navigation-enable js-quicksearch-field" data-hotkey="s" name="q" placeholder="Search…" tabindex="1" autocorrect="off" autocomplete="off" autocapitalize="off">
  </label>

    <div class="gist-quicksearch-results js-quicksearch-results js-navigation-container" data-quicksearch-url="/search/quick"></div>
</form></div>

    </div>
    <ul class="header-nav float-left" role="navigation">
      <li class="header-nav-item">
        <a href="https://gist.github.com/discover" class="header-nav-link" data-ga-click="Header, go to all gists, text:all gists">All gists</a>
      </li>

      <li class="header-nav-item">
        <a href="https://github.com/" class="header-nav-link" data-ga-click="Header, go to GitHub, text:GitHub">GitHub</a>
      </li>
    </ul>

      <ul class="header-nav user-nav float-right" id="user-links">
        <li class="header-nav-item">
          <a href="https://gist.github.com/" class="btn btn-sm" data-ga-click="Header, go to new gist, text:new gist">New gist</a>
        </li>

        <li class="header-nav-item dropdown js-menu-container">
          <button class="btn-link header-nav-link name tooltipped tooltipped-sw js-menu-target" type="button" aria-label="View profile and more" data-ga-click="Header, show menu, icon:avatar">
            <img alt="@HayderEspinoza" class="avatar" height="20" src="./laravel_files/4453471" width="20">
            <span class="dropdown-caret"></span>
          </button>

          <div class="dropdown-menu-content js-menu-content">
            <div class="dropdown-menu dropdown-menu-sw">
              <div class="dropdown-header header-nav-current-user css-truncate">
                Signed in as <strong class="css-truncate-target">HayderEspinoza</strong>
              </div>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="https://gist.github.com/HayderEspinoza" data-ga-click="Header, go to your gists, text:your gists">
                Your gists
              </a>

              <a class="dropdown-item" href="https://gist.github.com/HayderEspinoza/starred" data-ga-click="Header, go to starred gists, text:starred gists">
                Starred gists
              </a>

              <a class="dropdown-item" href="https://help.github.com/" data-ga-click="Header, go to help, text:help">
                Help
              </a>

              <div class="dropdown-divider"></div>

              <a class="dropdown-item" href="https://github.com/HayderEspinoza" data-ga-click="Header, go to profile, text:your profile">
                Your GitHub profile
              </a>

              <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="https://gist.github.com/auth/github/logout" class="logout-form" data-form-nonce="085ad7bdf6993d942e717fbf4a43515660a734c4" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="ubluDwEUGyyoMwqvZiS+ipeTWBcF/bQ0tl2TV99VTvk+Fi5+cf26tvnIkIjh+qCxN9kV+bTNz9paR7sZKdlhrA=="></div>
                <button class="dropdown-item dropdown-signout" data-ga-click="Header, sign out, icon:logout">
                  Sign out
                </button>
</form>            </div>
          </div>
        </li>
      </ul>

  </div>
</div>



      


    <div id="start-of-content" class="accessibility-aid"></div>

      <div id="js-flash-container">
</div>


    <div role="main">
      
  <div itemscope="" itemtype="http://schema.org/Code">
    <div id="gist-pjax-container" class="gist-content-wrapper" data-pjax-container="">
      

  <div class="gisthead pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
    <div class="container">
        

<div class="container repohead-details-container">

  <ul class="pagehead-actions">


    <li>
        
  <div class="js-toggler-container js-social-container starring-container ">

    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="https://gist.github.com/JeffreyWay/5112282/unstar" class="starred" data-form-nonce="085ad7bdf6993d942e717fbf4a43515660a734c4" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="OAMwo/ZTtEMjbQg/qbM6rPbJ6jwO0eIvN4p2HZgFyg7TULadEBr4BDIBx0KXfngHHqG2RBBTCXpWXpWBSnGFxg=="></div>
      <button class="btn btn-sm btn-with-count js-toggler-target" aria-label="Unstar this gist" title="Unstar JeffreyWay/5112282" data-ga-click="Repository, click unstar button, action:gists/gists#show; text:Unstar">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"></path></svg>
        Unstar
      </button>
        <a class="social-count js-social-count" href="https://gist.github.com/JeffreyWay/5112282/stargazers" aria-label="137 users starred this repository">
          137
        </a>
</form>
    <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="https://gist.github.com/JeffreyWay/5112282/star" class="unstarred" data-form-nonce="085ad7bdf6993d942e717fbf4a43515660a734c4" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="z160ngq7gboNV6F7fQtyg7QbmW73oQj6IAoHa00vW6ZpLwop9h5+IWfUcYG776kS/vXHY7+5EEvFWD6xgULZ8w=="></div>
      <button class="btn btn-sm btn-with-count js-toggler-target" aria-label="Star this gist" title="Star JeffreyWay/5112282" data-ga-click="Repository, click star button, action:gists/gists#show; text:Star">
        <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"></path></svg>
        Star
      </button>
        <a class="social-count js-social-count" href="https://gist.github.com/JeffreyWay/5112282/stargazers" aria-label="137 users starred this repository">
          137
        </a>
</form>  </div>


    </li>

      <li>
          <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="https://gist.github.com/JeffreyWay/5112282/fork" data-form-nonce="085ad7bdf6993d942e717fbf4a43515660a734c4" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="TqcKCH/rLhNFS6ByNvD306NTnuC1eocZs2I9Q45kiCbQiduVb/1XnrUB3d4YZAHBWhSxoQ9jt3fR77+VRRfn5A=="></div>
    <button class="btn btn-sm btn-with-count" type="submit">
      <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
      Fork
    </button>
      <a class="social-count js-social-count" href="https://gist.github.com/JeffreyWay/5112282/forks" aria-label="44 users forked this gist">
        44
      </a>
</form>
      </li>

      <li>
        <div class="select-menu js-menu-container js-select-menu gist-user-actions">
          <button class="btn btn-sm select-menu-button icon-only js-menu-target" type="button" aria-haspopup="true" aria-label="Report user">
            <svg aria-hidden="true" class="octicon octicon-stop" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M10 1H4L0 5v6l4 4h6l4-4V5l-4-4zm3 9.5L9.5 14h-5L1 10.5v-5L4.5 2h5L13 5.5v5zM6 4h2v5H6V4zm0 6h2v2H6v-2z"></path></svg>
          </button>

          <div class="select-menu-modal-holder js-menu-content js-navigation-container">
            <div class="select-menu-modal">
              <div class="select-menu-header">
                <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
                <span class="select-menu-title">User actions</span>
              </div>
              <div class="select-menu-list">
                <div class="select-menu-item js-navigation-item">
                  <!-- </textarea> --><!-- '"` --><form action="https://gist.github.com/JeffreyWay/5112282/report" class="btn-group-form inline-form" data-form-nonce="085ad7bdf6993d942e717fbf4a43515660a734c4" method="post"><div><input class="btn-plain select-menu-item-text js-navigation-open" data-confirm="Do you want to report the contents of this gist as abuse?" type="submit" value="Report abuse"><input name="authenticity_token" type="hidden" value="PWP2mHwqQ9S1M6PjoAUXuKd2o2CEJJlmOftha5RvDkklH+lVd3H1Fq7Q5ljFB/3eOz9SEXV++O2ORGiFpHsy0w=="></div></form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
  </ul>

  <h1 class="public css-truncate">
    <img alt="@JeffreyWay" class="avatar gist-avatar" height="26" src="./laravel_files/183223" width="26">
    <span class="author"><a href="https://gist.github.com/JeffreyWay" class="url fn" rel="author"><span itemprop="author">JeffreyWay</span></a></span><!--
        --><span class="path-divider">/</span><!--
        --><strong itemprop="name" class="gist-header-title css-truncate-target"><a href="https://gist.github.com/JeffreyWay/5112282">laravel.js</a></strong>

    <div class="gist-timestamp">Last active <time-ago datetime="2016-09-09T21:06:46Z" title="9 sept. 2016 16:06 GMT-5">5 days ago</time-ago></div>
  </h1>
</div>

<div class="container gist-file-navigation">
  <div class="float-right file-navigation-options" data-multiple="">

    <div class="file-navigation-option">
  <input type="hidden" name="protocol_type" value="clone">

  <div class="select-menu js-menu-container js-select-menu">
    <div class="input-group js-select-button js-zeroclipboard-container">
      <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone Embed, location:repo overview">
    Embed
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="&lt;script src=&quot;https://gist.github.com/JeffreyWay/5112282.js&quot;&gt;&lt;/script&gt;" aria-label="Clone this repository at &lt;script src=&quot;https://gist.github.com/JeffreyWay/5112282.js&quot;&gt;&lt;/script&gt;" readonly="">
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg></button>
</div>

    </div>

    <div class="select-menu-modal-holder">
      <div class="select-menu-modal js-menu-content" aria-hidden="true">
        <div class="select-menu-header">
          <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
          <span class="select-menu-title">What would you like to do?</span>
        </div>

        <div class="select-menu-list js-navigation-container" role="menu">
            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
              <div class="select-menu-item-text">
                <input type="radio" name="protocol_selector" value="embed" checked="">
                <span class="select-menu-item-heading">
                  
                  Embed
                </span>
                  <span class="description">
                    Embed this gist in your website.
                  </span>
                <span class="js-select-button-text hidden-select-button-text">
                  <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone Embed, location:repo overview">
    Embed
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="&lt;script src=&quot;https://gist.github.com/JeffreyWay/5112282.js&quot;&gt;&lt;/script&gt;" aria-label="Clone this repository at &lt;script src=&quot;https://gist.github.com/JeffreyWay/5112282.js&quot;&gt;&lt;/script&gt;" readonly="">
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg></button>
</div>

                </span>
              </div>
            </div>
            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
              <div class="select-menu-item-text">
                <input type="radio" name="protocol_selector" value="share">
                <span class="select-menu-item-heading">
                  
                  Share
                </span>
                  <span class="description">
                    Copy sharable URL for this gist.
                  </span>
                <span class="js-select-button-text hidden-select-button-text">
                  <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone Share, location:repo overview">
    Share
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="https://gist.github.com/JeffreyWay/5112282" aria-label="Clone this repository at https://gist.github.com/JeffreyWay/5112282" readonly="">
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg></button>
</div>

                </span>
              </div>
            </div>
            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
              <div class="select-menu-item-text">
                <input type="radio" name="protocol_selector" value="http">
                <span class="select-menu-item-heading">
                  Clone via
                  HTTPS
                </span>
                  <span class="description">
                    Clone with Git or checkout with SVN using the repository's web address.
                  </span>
                <span class="js-select-button-text hidden-select-button-text">
                  <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone HTTPS, location:repo overview">
    HTTPS
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="https://gist.github.com/5112282.git" aria-label="Clone this repository at https://gist.github.com/5112282.git" readonly="">
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg></button>
</div>

                </span>
              </div>
            </div>
            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
              <div class="select-menu-item-text">
                <input type="radio" name="protocol_selector" value="ssh">
                <span class="select-menu-item-heading">
                  Clone via
                  SSH
                </span>
                  <span class="description">
                    Clone with an SSH key and passphrase from your GitHub settings.
                  </span>
                <span class="js-select-button-text hidden-select-button-text">
                  <div class="input-group-button">
  <button type="button" class="btn btn-sm select-menu-button js-menu-target" data-ga-click="Repository, clone SSH, location:repo overview">
    SSH
  </button>
</div>
<input type="text" class="form-control input-monospace input-sm js-zeroclipboard-target js-url-field" value="git@gist.github.com:5112282.git" aria-label="Clone this repository at git@gist.github.com:5112282.git" readonly="">
<div class="input-group-button">
  <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"></path></svg></button>
</div>

                </span>
              </div>
            </div>
        </div>
        <div class="select-menu-list" role="menu">
          <a class="select-menu-item select-menu-action" href="https://help.github.com/articles/which-remote-url-should-i-use" target="_blank">
            <svg aria-hidden="true" class="octicon octicon-question select-menu-item-icon" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M6 10h2v2H6v-2zm4-3.5C10 8.64 8 9 8 9H6c0-.55.45-1 1-1h.5c.28 0 .5-.22.5-.5v-1c0-.28-.22-.5-.5-.5h-1c-.28 0-.5.22-.5.5V7H4c0-1.5 1.5-3 3-3s3 1 3 2.5zM7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7z"></path></svg>
            <div class="select-menu-item-text">
              Learn more about clone URLs
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="file-navigation-option">
    <a href="https://windows.github.com/" class="btn btn-sm tooltipped tooltipped-s tooltipped-multiline" aria-label="Save JeffreyWay/5112282 to your computer and use it in GitHub Desktop.">
      <svg aria-hidden="true" class="octicon octicon-desktop-download" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 6h3V0h2v6h3l-4 4-4-4zm11-4h-4v1h4v8H1V3h4V2H1c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5.34c-.25.61-.86 1.39-2.34 2h8c-1.48-.61-2.09-1.39-2.34-2H15c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1z"></path></svg>
    </a>
</div>


    <div class="file-navigation-option">
      <a href="https://gist.github.com/JeffreyWay/5112282/archive/09198878fab3f4fb9657de1776b534ce9ad3d9ab.zip" class="btn btn-sm" rel="nofollow" data-ga-click="Gist, download zip, location:gist overview">
        Download ZIP
      </a>
    </div>
  </div>

  <div class="float-left">
    <nav class="reponav js-repo-nav js-sidenav-container-pjax" role="navigation" data-pjax="#gist-pjax-container">

  <a href="https://gist.github.com/JeffreyWay/5112282" aria-label="Code" aria-selected="true" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-pjax="true" data-selected-links="gist_code /JeffreyWay/5112282">
    <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"></path></svg>
    Code
</a>
    <a href="https://gist.github.com/JeffreyWay/5112282/revisions" aria-label="Revisions" class="js-selected-navigation-item reponav-item" data-hotkey="g r" data-pjax="true" data-selected-links="gist_revisions /JeffreyWay/5112282/revisions">
      <svg aria-hidden="true" class="octicon octicon-git-commit" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M10.86 7c-.45-1.72-2-3-3.86-3-1.86 0-3.41 1.28-3.86 3H0v2h3.14c.45 1.72 2 3 3.86 3 1.86 0 3.41-1.28 3.86-3H14V7h-3.14zM7 10.2c-1.22 0-2.2-.98-2.2-2.2 0-1.22.98-2.2 2.2-2.2 1.22 0 2.2.98 2.2 2.2 0 1.22-.98 2.2-2.2 2.2z"></path></svg>
      Revisions
      <span class="counter">6</span>
</a>
    <a href="https://gist.github.com/JeffreyWay/5112282/stargazers" aria-label="Stars" class="js-selected-navigation-item reponav-item" data-hotkey="g s" data-pjax="true" data-selected-links="gist_stars /JeffreyWay/5112282/stargazers">
      <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"></path></svg>
      Stars
      <span class="counter">137</span>
</a>
    <a href="https://gist.github.com/JeffreyWay/5112282/forks" aria-label="Forks" class="js-selected-navigation-item reponav-item" data-hotkey="g f" data-pjax="true" data-selected-links="gist_forks /JeffreyWay/5112282/forks">
      <svg aria-hidden="true" class="octicon octicon-git-branch" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path d="M10 5c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v.3c-.02.52-.23.98-.63 1.38-.4.4-.86.61-1.38.63-.83.02-1.48.16-2 .45V4.72a1.993 1.993 0 0 0-1-3.72C.88 1 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2 1.11 0 2-.89 2-2 0-.53-.2-1-.53-1.36.09-.06.48-.41.59-.47.25-.11.56-.17.94-.17 1.05-.05 1.95-.45 2.75-1.25S8.95 7.77 9 6.73h-.02C9.59 6.37 10 5.73 10 5zM2 1.8c.66 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2C1.35 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2zm0 12.41c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm6-8c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
      Forks
      <span class="counter">44</span>
</a></nav>

  </div>
</div>


    </div><!-- /.container -->
  </div><!-- /.repohead -->

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content gist-content">
    



<div>
  <div class="repository-meta js-details-container">
  <div class="repository-meta-content" itemprop="about">
    Want to send a DELETE request when outside of a form? This will handle the form-creation bits for you dynamically, similar to the Rails implementation. (Requires jQuery, but doesn't have to.) To use, import script, and create a link with the `data-method="DELETE"` attribute.
  </div>
</div>


      <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-laravel-js" class="file">
      <div class="file-header">
        <div class="file-actions">

          <a href="https://gist.github.com/JeffreyWay/5112282/raw/09198878fab3f4fb9657de1776b534ce9ad3d9ab/laravel.js" class="btn btn-sm ">Raw</a>
        </div>
        <div class="file-info">
          <span class="icon">
            <svg aria-hidden="true" class="octicon octicon-gist" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.5 5L10 7.5 7.5 10l-.75-.75L8.5 7.5 6.75 5.75 7.5 5zm-3 0L2 7.5 4.5 10l.75-.75L3.5 7.5l1.75-1.75L4.5 5zM0 13V2c0-.55.45-1 1-1h10c.55 0 1 .45 1 1v11c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1zm1 0h10V2H1v11z"></path></svg>
          </span>
          <a class="tooltipped tooltipped-s css-truncate" aria-label="Permalink" href="https://gist.github.com/JeffreyWay/5112282#file-laravel-js">
            <strong class="user-select-contain gist-blob-name css-truncate-target">
              laravel.js
            </strong>
          </a>
        </div>
      </div>
    

  <div itemprop="text" class="blob-wrapper data type-javascript">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-laravel-js-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-laravel-js-LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-c">/*</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-laravel-js-LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-c">&lt;a href="posts/2" data-method="delete"&gt; &lt;---- We want to send an HTTP DELETE request</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-laravel-js-LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-c"></span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-laravel-js-LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-c">- Or, request confirmation in the process -</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-laravel-js-LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-c"></span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-laravel-js-LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-c">&lt;a href="posts/2" data-method="delete" data-confirm="Are you sure?"&gt;</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-laravel-js-LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-c">*/</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-laravel-js-LC8" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-laravel-js-LC9" class="blob-code blob-code-inner js-file-line">(<span class="pl-k">function</span>() {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-laravel-js-LC10" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-laravel-js-LC11" class="blob-code blob-code-inner js-file-line">  <span class="pl-k">var</span> laravel <span class="pl-k">=</span> {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="file-laravel-js-LC12" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">initialize</span><span class="pl-k">:</span> <span class="pl-k">function</span>() {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="file-laravel-js-LC13" class="blob-code blob-code-inner js-file-line">      <span class="pl-v">this</span>.<span class="pl-smi">methodLinks</span> <span class="pl-k">=</span> <span class="pl-en">$</span>(<span class="pl-s"><span class="pl-pds">'</span>a[data-method]<span class="pl-pds">'</span></span>);</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="file-laravel-js-LC14" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="file-laravel-js-LC15" class="blob-code blob-code-inner js-file-line">      <span class="pl-v">this</span>.<span class="pl-en">registerEvents</span>();</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="file-laravel-js-LC16" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="file-laravel-js-LC17" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="file-laravel-js-LC18" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">registerEvents</span><span class="pl-k">:</span> <span class="pl-k">function</span>() {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="file-laravel-js-LC19" class="blob-code blob-code-inner js-file-line">      <span class="pl-v">this</span>.<span class="pl-smi">methodLinks</span>.<span class="pl-en">on</span>(<span class="pl-s"><span class="pl-pds">'</span>click<span class="pl-pds">'</span></span>, <span class="pl-v">this</span>.<span class="pl-smi">handleMethod</span>);</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="file-laravel-js-LC20" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="file-laravel-js-LC21" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="file-laravel-js-LC22" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">handleMethod</span><span class="pl-k">:</span> <span class="pl-k">function</span>(<span class="pl-smi">e</span>) {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="file-laravel-js-LC23" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> link <span class="pl-k">=</span> <span class="pl-en">$</span>(<span class="pl-v">this</span>);</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="file-laravel-js-LC24" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> httpMethod <span class="pl-k">=</span> <span class="pl-smi">link</span>.<span class="pl-c1">data</span>(<span class="pl-s"><span class="pl-pds">'</span>method<span class="pl-pds">'</span></span>).<span class="pl-c1">toUpperCase</span>();</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="file-laravel-js-LC25" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> form;</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="file-laravel-js-LC26" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="file-laravel-js-LC27" class="blob-code blob-code-inner js-file-line">      <span class="pl-c">// If the data-method attribute is not PUT or DELETE,</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="file-laravel-js-LC28" class="blob-code blob-code-inner js-file-line">      <span class="pl-c">// then we don't know what to do. Just ignore.</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="file-laravel-js-LC29" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> ( <span class="pl-smi">$</span>.<span class="pl-en">inArray</span>(httpMethod, [<span class="pl-s"><span class="pl-pds">'</span>PUT<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>DELETE<span class="pl-pds">'</span></span>]) <span class="pl-k">===</span> <span class="pl-k">-</span> <span class="pl-c1">1</span> ) {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="file-laravel-js-LC30" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">return</span>;</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="file-laravel-js-LC31" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="file-laravel-js-LC32" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="file-laravel-js-LC33" class="blob-code blob-code-inner js-file-line">      <span class="pl-c">// Allow user to optionally provide data-confirm="Are you sure?"</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="file-laravel-js-LC34" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">if</span> ( <span class="pl-smi">link</span>.<span class="pl-c1">data</span>(<span class="pl-s"><span class="pl-pds">'</span>confirm<span class="pl-pds">'</span></span>) ) {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="file-laravel-js-LC35" class="blob-code blob-code-inner js-file-line">        <span class="pl-k">if</span> ( <span class="pl-k">!</span> <span class="pl-smi">laravel</span>.<span class="pl-en">verifyConfirm</span>(link) ) {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="file-laravel-js-LC36" class="blob-code blob-code-inner js-file-line">          <span class="pl-k">return</span> <span class="pl-c1">false</span>;</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="file-laravel-js-LC37" class="blob-code blob-code-inner js-file-line">        }</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="file-laravel-js-LC38" class="blob-code blob-code-inner js-file-line">      }</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="file-laravel-js-LC39" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="file-laravel-js-LC40" class="blob-code blob-code-inner js-file-line">      form <span class="pl-k">=</span> <span class="pl-smi">laravel</span>.<span class="pl-en">createForm</span>(link);</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="file-laravel-js-LC41" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">form</span>.<span class="pl-c1">submit</span>();</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="file-laravel-js-LC42" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="file-laravel-js-LC43" class="blob-code blob-code-inner js-file-line">      <span class="pl-smi">e</span>.<span class="pl-c1">preventDefault</span>();</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="file-laravel-js-LC44" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="file-laravel-js-LC45" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="file-laravel-js-LC46" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">verifyConfirm</span><span class="pl-k">:</span> <span class="pl-k">function</span>(<span class="pl-smi">link</span>) {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="file-laravel-js-LC47" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-en">confirm</span>(<span class="pl-smi">link</span>.<span class="pl-c1">data</span>(<span class="pl-s"><span class="pl-pds">'</span>confirm<span class="pl-pds">'</span></span>));</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="file-laravel-js-LC48" class="blob-code blob-code-inner js-file-line">    },</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="file-laravel-js-LC49" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="file-laravel-js-LC50" class="blob-code blob-code-inner js-file-line">    <span class="pl-en">createForm</span><span class="pl-k">:</span> <span class="pl-k">function</span>(<span class="pl-smi">link</span>) {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="file-laravel-js-LC51" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> form <span class="pl-k">=</span> </td>
      </tr>
      <tr>
        <td id="file-laravel-js-L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="file-laravel-js-LC52" class="blob-code blob-code-inner js-file-line">      <span class="pl-en">$</span>(<span class="pl-s"><span class="pl-pds">'</span>&lt;form&gt;<span class="pl-pds">'</span></span>, {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="file-laravel-js-LC53" class="blob-code blob-code-inner js-file-line">        <span class="pl-s"><span class="pl-pds">'</span>method<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>POST<span class="pl-pds">'</span></span>,</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="file-laravel-js-LC54" class="blob-code blob-code-inner js-file-line">        <span class="pl-s"><span class="pl-pds">'</span>action<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-smi">link</span>.<span class="pl-en">attr</span>(<span class="pl-s"><span class="pl-pds">'</span>href<span class="pl-pds">'</span></span>)</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="file-laravel-js-LC55" class="blob-code blob-code-inner js-file-line">      });</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="file-laravel-js-LC56" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="file-laravel-js-LC57" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> token <span class="pl-k">=</span> </td>
      </tr>
      <tr>
        <td id="file-laravel-js-L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="file-laravel-js-LC58" class="blob-code blob-code-inner js-file-line">      <span class="pl-en">$</span>(<span class="pl-s"><span class="pl-pds">'</span>&lt;input&gt;<span class="pl-pds">'</span></span>, {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="file-laravel-js-LC59" class="blob-code blob-code-inner js-file-line">        <span class="pl-s"><span class="pl-pds">'</span>type<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>hidden<span class="pl-pds">'</span></span>,</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="file-laravel-js-LC60" class="blob-code blob-code-inner js-file-line">        <span class="pl-s"><span class="pl-pds">'</span>name<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>csrf_token<span class="pl-pds">'</span></span>,</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="file-laravel-js-LC61" class="blob-code blob-code-inner js-file-line">          <span class="pl-s"><span class="pl-pds">'</span>value<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>&lt;?php echo csrf_token(); ?&gt;<span class="pl-pds">'</span></span> <span class="pl-c">// hmmmm...</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="file-laravel-js-LC62" class="blob-code blob-code-inner js-file-line">        });</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="file-laravel-js-LC63" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="file-laravel-js-LC64" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">var</span> hiddenInput <span class="pl-k">=</span></td>
      </tr>
      <tr>
        <td id="file-laravel-js-L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="file-laravel-js-LC65" class="blob-code blob-code-inner js-file-line">      <span class="pl-en">$</span>(<span class="pl-s"><span class="pl-pds">'</span>&lt;input&gt;<span class="pl-pds">'</span></span>, {</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="file-laravel-js-LC66" class="blob-code blob-code-inner js-file-line">        <span class="pl-s"><span class="pl-pds">'</span>name<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>_method<span class="pl-pds">'</span></span>,</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="file-laravel-js-LC67" class="blob-code blob-code-inner js-file-line">        <span class="pl-s"><span class="pl-pds">'</span>type<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">'</span>hidden<span class="pl-pds">'</span></span>,</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="file-laravel-js-LC68" class="blob-code blob-code-inner js-file-line">        <span class="pl-s"><span class="pl-pds">'</span>value<span class="pl-pds">'</span></span><span class="pl-k">:</span> <span class="pl-smi">link</span>.<span class="pl-c1">data</span>(<span class="pl-s"><span class="pl-pds">'</span>method<span class="pl-pds">'</span></span>)</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="file-laravel-js-LC69" class="blob-code blob-code-inner js-file-line">      });</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="file-laravel-js-LC70" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="file-laravel-js-LC71" class="blob-code blob-code-inner js-file-line">      <span class="pl-k">return</span> <span class="pl-smi">form</span>.<span class="pl-c1">append</span>(token, hiddenInput)</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="file-laravel-js-LC72" class="blob-code blob-code-inner js-file-line">                 .<span class="pl-en">appendTo</span>(<span class="pl-s"><span class="pl-pds">'</span>body<span class="pl-pds">'</span></span>);</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="file-laravel-js-LC73" class="blob-code blob-code-inner js-file-line">    }</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="file-laravel-js-LC74" class="blob-code blob-code-inner js-file-line">  };</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="file-laravel-js-LC75" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="file-laravel-js-LC76" class="blob-code blob-code-inner js-file-line">  <span class="pl-smi">laravel</span>.<span class="pl-en">initialize</span>();</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="file-laravel-js-LC77" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-laravel-js-L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="file-laravel-js-LC78" class="blob-code blob-code-inner js-file-line">})();</td>
      </tr>
</tbody></table>

  </div>

  </div>
  
</div>


  <a name="comments"></a>
  <div class="discussion-timeline gist-discussion-timeline js-quote-selection-container ">
    <div class="js-discussion js-socket-channel" data-channel="tenant:1:marked-as-read:gist:5112282">
      

  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/muffycompo"><img alt="@muffycompo" class="timeline-comment-avatar" height="44" src="./laravel_files/780240" width="44"></a>
    

<div id="gistcomment-793506" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="cf647c7665beaaaa85f106ef6dce0f48">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/muffycompo" class="author">muffycompo</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-793506" class="timestamp">
        <relative-time datetime="2013-03-07T23:40:46Z" title="7 mar. 2013 18:40 GMT-5">on 7 Mar 2013</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Nice one Jeffrey, Thanks!</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/ericbarnes"><img alt="@ericbarnes" class="timeline-comment-avatar" height="44" src="./laravel_files/116662" width="44"></a>
    

<div id="gistcomment-793579" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="c8fcda6895c9a2c7277a9085e2c030d1">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/ericbarnes" class="author">ericbarnes</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-793579" class="timestamp">
        <relative-time datetime="2013-03-08T02:10:26Z" title="7 mar. 2013 21:10 GMT-5">on 7 Mar 2013</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Wonder if it would be easier to add an additional data* method for token? </p>

<pre><code>&lt;a href="posts/2" data-method="delete" data-token="{{ csrf_token() }} 
</code></pre>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/JeffreyWay"><img alt="@JeffreyWay" class="timeline-comment-avatar" height="44" src="./laravel_files/183223(1)" width="44"></a>
    

<div id="gistcomment-793584" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                    owner-comment  js-reorderable-task-lists reorderable-task-lists" data-body-version="7328b7d7c5083d4bc809d1758cc4cc46">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>

    <span class="timeline-comment-label">Owner</span>


  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/JeffreyWay" class="author">JeffreyWay</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-793584" class="timestamp">
        <relative-time datetime="2013-03-08T02:28:17Z" title="7 mar. 2013 21:28 GMT-5">on 7 Mar 2013</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Yeah, the embedded PHP is a temporary thing.</p>

<p>Maybe store the csrf token in a meta tag, and then just grab that value from the script. That way, the user never has to worry about passing the token custom attribute.</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/tommymarshall"><img alt="@tommymarshall" class="timeline-comment-avatar" height="44" src="./laravel_files/871454" width="44"></a>
    

<div id="gistcomment-793600" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="3ba66ea849da2b29fe12e7befbb7ec72">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/tommymarshall" class="author">tommymarshall</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-793600" class="timestamp">
        <relative-time datetime="2013-03-08T03:21:28Z" title="7 mar. 2013 22:21 GMT-5">on 7 Mar 2013</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Yep, grab that guy from a meta tag. Otherwise <g-emoji alias="+1" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f44d.png"><img class="emoji" alt=":+1:" height="20" width="20" src="./laravel_files/1f44d.png"></g-emoji></p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/alexrussell"><img alt="@alexrussell" class="timeline-comment-avatar" height="44" src="./laravel_files/412784" width="44"></a>
    

<div id="gistcomment-794394" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="03991e6e7710afeaa1f89e09a1be89bc">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/alexrussell" class="author">alexrussell</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-794394" class="timestamp">
        <relative-time datetime="2013-03-08T22:35:44Z" title="8 mar. 2013 17:35 GMT-5">on 8 Mar 2013</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Looks interesting, although I've always thought the best way around this is to define a new HTML helper function that spits out the form and button (with appropriate link styling or whatever) directly from PHP. Added bonus is that there's no bodging for the token, and non-JS people get the correct experience.</p>

<p>Incidentally, I've only ever seen one framework actually include this functionality for 'delete' action buttons (either using a 'proper' DELETE form or back when we just POSTed to a /delete and didn't pass a method or care about being RESTful) out of the box although can't currently remember which. Maybe Yii.</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/dirkpostma"><img alt="@dirkpostma" class="timeline-comment-avatar" height="44" src="./laravel_files/3089771" width="44"></a>
    

<div id="gistcomment-819779" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="703b979510aeceafed7b11745a0912d0">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/dirkpostma" class="author">dirkpostma</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-819779" class="timestamp">
        <relative-time datetime="2013-04-23T11:32:00Z" title="23 abr. 2013 6:32 GMT-5">on 23 Apr 2013</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>I recently created an ajax way of sending DELETE requests.  I'm a jQuery newbee (getting better using your tuts, thanks again!), but I gave it a try.</p>

<p><a href="https://gist.github.com/dirkpostma/5442850">https://gist.github.com/dirkpostma/5442850</a></p>

<pre><code>$(document).ready(function() {

// Add click handler to restful hyperlinks,
// e.g. to send DELETE requests
// Example:
// 
// &lt;a href="/destroy/1" class="rest-delete"&gt;delete&lt;/a&gt;
// &lt;script&gt;restful.init($('.rest-delete'));&lt;/script&gt;
// 
var restful = {

    // TODO: add various configurations, e.g.
    // - do_confirm: [ true | false ]
    // - confirm_message: "Are you sure?"
    // - do_remove_parent: [ true | false ]
    // - parent_selector: '.li' '.div' ...
    // - success: (closure)

    init: function(elem) {
        elem.on('click', function(e) {
            self=$(this);
            e.preventDefault();

            if(confirm('Are you sure?')) {
              $.ajax({
                url: self.attr('href'),
                method: 'DELETE',
                success: function(data) {
                  self.parent('li').remove(); // todo: make configurable
                },
                error: function(data) {
                    alert("Error while deleting.");
                    console.log(data);
                }
              });
            };
        })
    },
}

restful.init($('.rest-delete'));
});
</code></pre>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/franzose"><img alt="@franzose" class="timeline-comment-avatar" height="44" src="./laravel_files/708158" width="44"></a>
    

<div id="gistcomment-1196763" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="38f5c24717fedaa404babb0c4710152e">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/franzose" class="author">franzose</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1196763" class="timestamp">
        <relative-time datetime="2014-03-22T13:25:56Z" title="22 mar. 2014 8:25 GMT-5">on 22 Mar 2014</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Thanks!</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/gpai"><img alt="@gpai" class="timeline-comment-avatar" height="44" src="./laravel_files/5119275" width="44"></a>
    

<div id="gistcomment-1220483" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="7d5c57cd5237dbe70cc86ae357dff8c4">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/gpai" class="author">gpai</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1220483" class="timestamp">
        <relative-time datetime="2014-04-30T18:30:29Z" title="30 abr. 2014 13:30 GMT-5">on 30 Apr 2014</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Thanks a bunch! This helped so much!</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/cmd0315"><img alt="@cmd0315" class="timeline-comment-avatar" height="44" src="./laravel_files/2254927" width="44"></a>
    

<div id="gistcomment-1279303" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="cdbc781a8f20834c4c7af3e20a2911fe">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/cmd0315" class="author">cmd0315</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1279303" class="timestamp">
        <relative-time datetime="2014-08-11T08:03:16Z" title="11 ago. 2014 3:03 GMT-5">on 11 Aug 2014</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Hi Jeffrey! I just started using Laravel for my web app projects. Can you pls elaborate on your js script? Sorry, I am a bit confused. What link should I provide in the anchor tag? Same link as the one in the form prior to it or should I create another route that uses a different method in the controller? I am already using a form for the update process so I want the delete request to be done outside of it. Thanks.</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/cavalor"><img alt="@cavalor" class="timeline-comment-avatar" height="44" src="./laravel_files/5580125" width="44"></a>
    

<div id="gistcomment-1287236" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="d1bfcf4ab7fdc90d99ddd86400236fec">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/cavalor" class="author">cavalor</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1287236" class="timestamp">
        <relative-time datetime="2014-08-23T23:49:38Z" title="23 ago. 2014 18:49 GMT-5">on 23 Aug 2014</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>thanks!!! that helped me so much.</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/dlm423"><img alt="@dlm423" class="timeline-comment-avatar" height="44" src="./laravel_files/1368552" width="44"></a>
    

<div id="gistcomment-1295034" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="9b9ef896b5d435a27ec39ae7c4488a79">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/dlm423" class="author">dlm423</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1295034" class="timestamp">
        <relative-time datetime="2014-09-05T23:20:57Z" title="5 sept. 2014 18:20 GMT-5">on 5 Sep 2014</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Thanks for this script, seems quite useful! I am having an issue, my <code>&lt;a&gt;</code> tag is redirecting me to another page, as opposed to submitting the DELETE request.  I asked a question on Stack Overflow and hope to get some help in case anyone else runs into this issue. <a href="http://stackoverflow.com/questions/25695137/delete-request-outside-of-form-laravel/25695164">http://stackoverflow.com/questions/25695137/delete-request-outside-of-form-laravel/25695164</a></p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/kevinb1989"><img alt="@kevinb1989" class="timeline-comment-avatar" height="44" src="./laravel_files/7900186" width="44"></a>
    

<div id="gistcomment-1343187" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="9b70f70cd2838dd9f36ef3448fc52965">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/kevinb1989" class="author">kevinb1989</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1343187" class="timestamp">
        <relative-time datetime="2014-11-24T01:26:52Z" title="23 nov. 2014 20:26 GMT-5">on 23 Nov 2014</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>I don't know why I cannot implement this function. I use Debugbar and it displayed the error: View [posts.record] not found. Any idea?</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/roNn23"><img alt="@roNn23" class="timeline-comment-avatar" height="44" src="./laravel_files/849194" width="44"></a>
    

<div id="gistcomment-1392761" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="f0a2696e95535be34bcb4564a003b654">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/roNn23" class="author">roNn23</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1392761" class="timestamp">
        <relative-time datetime="2015-02-12T19:35:06Z" title="12 feb. 2015 14:35 GMT-5">on 12 Feb 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Updated the script for Laravel 5 (the token-input was renamed to _token):<br>
<a href="https://gist.github.com/roNn23/a86f31ecaf0c6e0a7d65">https://gist.github.com/roNn23/a86f31ecaf0c6e0a7d65</a></p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/StefanLex"><img alt="@StefanLex" class="timeline-comment-avatar" height="44" src="./laravel_files/2008672" width="44"></a>
    

<div id="gistcomment-1404813" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="98d6081ff4b64db4c2d56007bc1ac929">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/StefanLex" class="author">StefanLex</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1404813" class="timestamp">
        <relative-time datetime="2015-03-03T14:54:02Z" title="3 mar. 2015 9:54 GMT-5">on 3 Mar 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Thanks, work like charm. You are the best Jeffrey :)</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/rattfieldnz"><img alt="@rattfieldnz" class="timeline-comment-avatar" height="44" src="./laravel_files/2468863" width="44"></a>
    

<div id="gistcomment-1411885" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="4b3142b5f9355ab05fe7c02e7d00fdf5">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/rattfieldnz" class="author">rattfieldnz</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1411885" class="timestamp">
        <relative-time datetime="2015-03-12T23:23:51Z" title="12 mar. 2015 18:23 GMT-5">on 12 Mar 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>What would be the be the best way to style the dialog/popup like a JQuery dialog/modal, with the script in laravel.js? I'm more of a back-end developer, so my Javascript knowledge needs improving...</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/vpakg"><img alt="@vpakg" class="timeline-comment-avatar" height="44" src="./laravel_files/4654583" width="44"></a>
    

<div id="gistcomment-1453799" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="67d55c30f80331aaa8ef5f3c80f10cad">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/vpakg" class="author">vpakg</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1453799" class="timestamp">
        <relative-time datetime="2015-05-14T18:00:53Z" title="14 may. 2015 13:00 GMT-5">on 14 May 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Perfect. I'm using laravel 4.2 and took me a while to realise that <code>csrf_token</code> has been renamed to <code>_token</code>, so I was getting a token mismatch. Same applies to laravel 5, but there are plenty of forks with the updated code.</p>

<p>As always, thanks again Jeffrey.</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/raysn0w"><img alt="@raysn0w" class="timeline-comment-avatar" height="44" src="./laravel_files/9756466" width="44"></a>
    

<div id="gistcomment-1455007" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="8c21cad620b398ebda4958f41dbafb00">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/raysn0w" class="author">raysn0w</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1455007" class="timestamp">
        <relative-time datetime="2015-05-16T19:09:17Z" title="16 may. 2015 14:09 GMT-5">on 16 May 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Im curious, how did you guys managed to get this to work with the missing '$' before starting the function?</p>

<p>It doesnt work for me unless i add the '$'.</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/8lbiasian"><img alt="@8lbiasian" class="timeline-comment-avatar" height="44" src="./laravel_files/2717113" width="44"></a>
    

<div id="gistcomment-1458915" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="058d2f145086aad5403cd5bbafcb4529">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/8lbiasian" class="author">8lbiasian</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1458915" class="timestamp">
        <relative-time datetime="2015-05-22T13:02:16Z" title="22 may. 2015 8:02 GMT-5">on 22 May 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>how to make it work with L5 ?!</p>

<p>i try to change  'name': 'csrf_token', to  'name': '_token',</p>

<p>but i get </p>

<p>TokenMismatchException in VerifyCsrfToken.php line 46:</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/soufianeEL"><img alt="@soufianeEL" class="timeline-comment-avatar" height="44" src="./laravel_files/5108053" width="44"></a>
    

<div id="gistcomment-1466823" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="9576784d6135eee25823088c83ea4a2c">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/soufianeEL" class="author">soufianeEL</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1466823" class="timestamp">
        <relative-time datetime="2015-06-04T12:04:10Z" title="4 jun. 2015 7:04 GMT-5">on 4 Jun 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>updated to larevel 5 <br>
<a href="https://gist.github.com/soufianeEL/3f8483f0f3dc9e3ec5d9">here</a></p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/tahertechs"><img alt="@tahertechs" class="timeline-comment-avatar" height="44" src="./laravel_files/9886434" width="44"></a>
    

<div id="gistcomment-1490526" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="cbf33702a1f1282592597a53918997c5">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/tahertechs" class="author">tahertechs</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1490526" class="timestamp">
        <relative-time datetime="2015-07-10T22:07:14Z" title="10 jul. 2015 17:07 GMT-5">on 10 Jul 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>You are genious.</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/jeimz143"><img alt="@jeimz143" class="timeline-comment-avatar" height="44" src="./laravel_files/13939947" width="44"></a>
    

<div id="gistcomment-1605500" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="860c6cfa847c4a3409f2fcb5ecc3431f">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/jeimz143" class="author">jeimz143</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1605500" class="timestamp">
        <relative-time datetime="2015-10-27T04:29:44Z" title="26 oct. 2015 23:29 GMT-5">on 26 Oct 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>hi im new in larave and mine got tokenMismatch can anyone guide me on how am i suppose to include it into my  tag thanks :)</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/xoco70"><img alt="@xoco70" class="timeline-comment-avatar" height="44" src="./laravel_files/5855577" width="44"></a>
    

<div id="gistcomment-1620479" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="1c7ce2876d81ebcfcc3ec1623a441cb7">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/xoco70" class="author">xoco70</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1620479" class="timestamp">
        <relative-time datetime="2015-11-13T18:23:28Z" title="13 nov. 2015 13:23 GMT-5">on 13 Nov 2015</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>I get a View [places.show] not found.</p>

<p>I understand it, but don't know how to fix it.<br>
In my routes, I use resource();<br>
So, in my route list I have GET (route/{id}) --&gt; Show<br>
So, I don't understand well how should have 2 identical route for 2 actions ( GET (route/{id}) to show or delete)</p>

<p>Here are my route list</p>

<p>PUT      | places/{places}                | places.update       | App\Http\Controllers\PlaceController@update            | auth,auth  |<br>
|        | PATCH    | places/{places}                |                     | App\Http\Controllers\PlaceController@update            | auth,auth  |<br>
|        | GET|HEAD | places/{places}                | places.show         | App\Http\Controllers\PlaceController@show              | auth,auth  |<br>
|        | DELETE   | places/{places}                | places.destroy      | App\Http\Controllers\PlaceController@destroy           | auth,auth  |<br>
|        | GET|HEAD | places/{places}/edit           | places.edit         | App\Http\Controllers\PlaceController@edit              | auth,auth  |</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/janzenz"><img alt="@janzenz" class="timeline-comment-avatar" height="44" src="./laravel_files/1410147" width="44"></a>
    

<div id="gistcomment-1674487" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="14403dc7454924f4bb4050c3f710cf74">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/janzenz" class="author">janzenz</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1674487" class="timestamp">
        <relative-time datetime="2016-01-20T05:55:12Z" title="20 ene. 2016 0:55 GMT-5">on 20 Jan</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Got a problem with this where the link gets redirected instead of triggering the event. So I transferred <code>e.preventDefault();</code> at the beginning of <code>handleMethod</code> method and it solved my problem.</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/Chalkin"><img alt="@Chalkin" class="timeline-comment-avatar" height="44" src="./laravel_files/1204322" width="44"></a>
    

<div id="gistcomment-1686401" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="c85f2c59442fc041be11a312b83b8dc1">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/Chalkin" class="author">Chalkin</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1686401" class="timestamp">
        <relative-time datetime="2016-02-01T22:40:19Z" title="1 feb. 2016 17:40 GMT-5">on 1 Feb</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Thanks a lot guys! Works perfectly and saves lives!</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/junkystu"><img alt="@junkystu" class="timeline-comment-avatar" height="44" src="./laravel_files/7740675" width="44"></a>
    

<div id="gistcomment-1720833" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="8d53a00869cb519312bfe5aa90d4b80e">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/junkystu" class="author">junkystu</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1720833" class="timestamp">
        <relative-time datetime="2016-03-10T20:52:12Z" title="10 mar. 2016 15:52 GMT-5">on 10 Mar</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Something like this maybe?</p>

<pre><code>&lt;meta name="_token" content="{{ csrf_token() }}"&gt;
</code></pre>

<p>and then send it in the form:</p>

<pre><code> 'value': $('meta[name="_token"]').attr('content')
</code></pre>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/dialyy"><img alt="@dialyy" class="timeline-comment-avatar" height="44" src="./laravel_files/1283106" width="44"></a>
    

<div id="gistcomment-1743833" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="01e956792c37066e286c520afa47a927">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/dialyy" class="author">dialyy</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1743833" class="timestamp">
        <relative-time datetime="2016-04-06T17:39:15Z" title="6 abr. 2016 12:39 GMT-5">on 6 Apr</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>Folks using L5 </p>

<p>Line 57 to 62<br>
change -&gt;</p>

<pre><code>      var token = 
      $('&lt;input&gt;', {
        'type': 'hidden',
        'name': 'csrf_token',
          'value': '&lt;?php echo csrf_token(); ?&gt;' // hmmmm...
        });
</code></pre>

<p>to -&gt;</p>

<pre><code>      $('&lt;input&gt;', {
        'type': 'hidden',
        'name': '_token',
          'value': link.data('token')
        }); 
</code></pre>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/alimranahmed"><img alt="@alimranahmed" class="timeline-comment-avatar" height="44" src="./laravel_files/7629427" width="44"></a>
    

<div id="gistcomment-1774555" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="7b2dcb38309cdabbefea0d1d1294478e">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/alimranahmed" class="author">alimranahmed</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1774555" class="timestamp">
        <relative-time datetime="2016-05-11T09:10:54Z" title="11 may. 2016 4:10 GMT-5">on 11 May</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>^^ <br>
Thanks <a href="https://github.com/dialyy" class="user-mention">@dialyy</a></p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/neoplomero"><img alt="@neoplomero" class="timeline-comment-avatar" height="44" src="./laravel_files/4615219" width="44"></a>
    

<div id="gistcomment-1777499" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="79ece29dbf7945a4492fd6bdddc39e75">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/neoplomero" class="author">neoplomero</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1777499" class="timestamp">
        <relative-time datetime="2016-05-14T10:41:09Z" title="14 may. 2016 5:41 GMT-5">on 14 May</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p><a href="https://github.com/dialyy" class="user-mention">@dialyy</a> +1</p>
    </div>
  </div>


</div>

  </div>
  <div class="timeline-comment-wrapper js-comment-container">
    <a href="https://gist.github.com/pastullo"><img alt="@pastullo" class="timeline-comment-avatar" height="44" src="./laravel_files/1042406" width="44"></a>
    

<div id="gistcomment-1817382" class="comment previewable-edit timeline-comment js-comment js-task-list-container
                    
                      js-reorderable-task-lists reorderable-task-lists" data-body-version="3e47df1bc232eec138c47e80d3248c80">

  <div class="timeline-comment-header ">

    <div class="timeline-comment-actions">
    </div>



  <div class="timeline-comment-header-text">

    <strong>
      <a href="https://gist.github.com/pastullo" class="author">pastullo</a> 
    </strong>

    commented

      <a href="https://gist.github.com/JeffreyWay/5112282#gistcomment-1817382" class="timestamp">
        <relative-time datetime="2016-07-03T10:43:19Z" title="3 jul. 2016 5:43 GMT-5">on 3 Jul</relative-time>
      </a>

  </div>
</div>


  <div class="edit-comment-hide">
    <div class="comment-body markdown-body markdown-format js-comment-body">
        <p>unbelievable! How crazy is that i need to paste 80 custom lines of Javascript to simply get a non-GET link to work?</p>

<p>Missing the super useful Rails helpers and the magic UJS:</p>

<blockquote>
<p>link_to path, 'Delete', method: :delete</p>
</blockquote>
    </div>
  </div>


</div>

  </div>



<!-- Rendered timeline since 2016-09-09 14:06:46 -->
<div id="partial-timeline-marker" class="js-timeline-marker js-updatable-content" data-url="/JeffreyWay/5112282/show_partial?partial=gist%2Ftimeline_marker&amp;since=1473455206" data-last-modified="Fri, 09 Sep 2016 21:06:46 GMT">
</div>


      <div class="discussion-timeline-actions">
          <div class="timeline-comment-wrapper timeline-new-comment js-comment-container">
  <a href="https://gist.github.com/HayderEspinoza"><img alt="@HayderEspinoza" class="timeline-comment-avatar" height="44" src="./laravel_files/4453471(1)" width="44"></a>

  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="https://gist.github.com/JeffreyWay/5112282/comments" class="js-new-comment-form" data-form-nonce="085ad7bdf6993d942e717fbf4a43515660a734c4" data-remote="true" data-type="json" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="c2CLhRL6/DeEg1wfLNRuJW+KKrio1YYvBoN36e9f2BJ49/c7gFD+C24FbvSJVgMqXVS+Jgr6iP53t5M55Do3UQ=="></div>
    <div class="timeline-comment">
      <div class="js-suggester-container  js-previewable-comment-form previewable-comment-form write-selected" data-preview-url="/preview?markdown_unsupported=false&amp;subject=5112282&amp;subject_type=Gist">
  <div class="comment-form-head tabnav">
      <div class="js-toolbar toolbar-commenting">
        <div class="toolbar-group">
          <div class="toolbar-item dropdown js-menu-container">
            <button type="button" class="js-menu-target menu-target tooltipped tooltipped-n" aria-label="Add header text" tabindex="-1">
              <svg aria-hidden="true" class="octicon octicon-text-size" height="16" version="1.1" viewBox="0 0 18 16" width="18"><path d="M13.62 9.08L12.1 3.66h-.06l-1.5 5.42h3.08zM5.7 10.13S4.68 6.52 4.53 6.02h-.08l-1.13 4.11H5.7zM17.31 14h-2.25l-.95-3.25h-4.07L9.09 14H6.84l-.69-2.33H2.87L2.17 14H0l3.3-9.59h2.5l2.17 6.34L10.86 2h2.52l3.94 12h-.01z"></path></svg>
              <span class="dropdown-caret"></span>
            </button>

            <div class="dropdown-menu-content js-menu-content">
              <ul class="dropdown-menu dropdown-menu-s">
                <button type="button" class="js-toolbar-item dropdown-item dropdown-header1" data-prefix="# " data-ga-click="Markdown Toolbar, click, header1">
                  Header
                </button>
                <button type="button" class="js-toolbar-item dropdown-item dropdown-header2" data-prefix="## " data-ga-click="Markdown Toolbar, click, header2">
                  Header
                </button>
                <button type="button" class="js-toolbar-item dropdown-item dropdown-header3" data-prefix="### " data-ga-click="Markdown Toolbar, click, header3">
                  Header
                </button>
              </ul>
            </div>
          </div>

          <button type="button" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add bold text &lt;ctrl+b&gt;" tabindex="-1" data-prefix="**" data-suffix="**" data-toolbar-hotkey="b" data-ga-click="Markdown Toolbar, click, bold" data-trim-first="">
            <svg aria-hidden="true" class="octicon octicon-bold" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path d="M1 2h3.83c2.48 0 4.3.75 4.3 2.95 0 1.14-.63 2.23-1.67 2.61v.06c1.33.3 2.3 1.23 2.3 2.86 0 2.39-1.97 3.52-4.61 3.52H1V2zm3.66 4.95c1.67 0 2.38-.66 2.38-1.69 0-1.17-.78-1.61-2.34-1.61H3.13v3.3h1.53zm.27 5.39c1.77 0 2.75-.64 2.75-1.98 0-1.27-.95-1.81-2.75-1.81h-1.8v3.8h1.8v-.01z"></path></svg>
          </button>

          <button type="button" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add italic text &lt;ctrl+i&gt;" tabindex="-1" data-prefix="_" data-suffix="_" data-toolbar-hotkey="i" data-ga-click="Markdown Toolbar, click, italic" data-trim-first="">
            <svg aria-hidden="true" class="octicon octicon-italic" height="16" version="1.1" viewBox="0 0 6 16" width="6"><path d="M2.81 5h1.98L3 14H1l1.81-9zm.36-2.7c0-.7.58-1.3 1.33-1.3.56 0 1.13.38 1.13 1.03 0 .75-.59 1.3-1.33 1.3-.58 0-1.13-.38-1.13-1.03z"></path></svg>
          </button>
        </div>

        <div class="toolbar-group">
          <button type="button" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Insert a quote" tabindex="-1" data-prefix="&gt; " data-multiline="true" data-ga-click="Markdown Toolbar, click, quote" data-surround-with-newlines="">
            <svg aria-hidden="true" class="octicon octicon-quote" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M6.16 3.5C3.73 5.06 2.55 6.67 2.55 9.36c.16-.05.3-.05.44-.05 1.27 0 2.5.86 2.5 2.41 0 1.61-1.03 2.61-2.5 2.61-1.9 0-2.99-1.52-2.99-4.25 0-3.8 1.75-6.53 5.02-8.42L6.16 3.5zm7 0c-2.43 1.56-3.61 3.17-3.61 5.86.16-.05.3-.05.44-.05 1.27 0 2.5.86 2.5 2.41 0 1.61-1.03 2.61-2.5 2.61-1.89 0-2.98-1.52-2.98-4.25 0-3.8 1.75-6.53 5.02-8.42l1.14 1.84h-.01z"></path></svg>
          </button>

          <button type="button" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Insert code" tabindex="-1" data-prefix="`" data-suffix="`" data-block-prefix="```" data-block-suffix="```" data-ga-click="Markdown Toolbar, click, code">
            <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"></path></svg>
          </button>

          <button type="button" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a link &lt;ctrl+k&gt;" tabindex="-1" data-prefix="[" data-suffix="](url)" data-replace-next="url" data-toolbar-hotkey="k" data-scan-for="https?://" data-ga-click="Markdown Toolbar, click, link">
            <svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>
          </button>
        </div>

        <div class="toolbar-group">
          <button type="button" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a bulleted list" tabindex="-1" data-multiline="true" data-prefix="- " data-ga-click="Markdown Toolbar, click, unordered list" data-surround-with-newlines="">
            <svg aria-hidden="true" class="octicon octicon-list-unordered" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M2 13c0 .59 0 1-.59 1H.59C0 14 0 13.59 0 13c0-.59 0-1 .59-1h.81c.59 0 .59.41.59 1H2zm2.59-9h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1H4.59C4 2 4 2.41 4 3c0 .59 0 1 .59 1zM1.41 7H.59C0 7 0 7.41 0 8c0 .59 0 1 .59 1h.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm0-5H.59C0 2 0 2.41 0 3c0 .59 0 1 .59 1h.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm10 5H4.59C4 7 4 7.41 4 8c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01zm0 5H4.59C4 12 4 12.41 4 13c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1h.01z"></path></svg>
          </button>
          <button type="button" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a numbered list" tabindex="-1" data-prefix="1. " data-multiline="true" data-ga-click="Markdown Toolbar, click, ordered list" data-ordered-list="">
            <svg aria-hidden="true" class="octicon octicon-list-ordered" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 13c0 .59 0 1-.59 1H4.59C4 14 4 13.59 4 13c0-.59 0-1 .59-1h6.81c.59 0 .59.41.59 1H12zM4.59 4h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1H4.59C4 2 4 2.41 4 3c0 .59 0 1 .59 1zm6.81 3H4.59C4 7 4 7.41 4 8c0 .59 0 1 .59 1h6.81c.59 0 .59-.41.59-1 0-.59 0-1-.59-1zM2 1h-.72c-.3.19-.58.25-1.03.34V2H1v2.14H.16V5H3v-.86H2V1zm.25 8.13c-.17 0-.45.03-.66.06.53-.56 1.14-1.25 1.14-1.89C2.71 6.52 2.17 6 1.37 6c-.59 0-.97.2-1.38.64l.58.58c.19-.19.38-.38.64-.38.28 0 .48.16.48.52 0 .53-.77 1.2-1.7 2.06V10h3l-.09-.88h-.66l.01.01zm-.08 3.78v-.03c.44-.19.64-.47.64-.86 0-.7-.56-1.11-1.44-1.11-.48 0-.89.19-1.28.52l.55.64c.25-.2.44-.31.69-.31.27 0 .42.13.42.36 0 .27-.2.44-.86.44v.75c.83 0 .98.17.98.47 0 .25-.23.38-.58.38-.28 0-.56-.14-.81-.38l-.48.66c.3.36.77.56 1.41.56.83 0 1.53-.41 1.53-1.16 0-.5-.31-.81-.77-.94v.01z"></path></svg>
          </button>

            <button type="button" class="js-toolbar-item toolbar-item tooltipped tooltipped-n" aria-label="Add a task list" tabindex="-1" data-prefix="- [ ] " data-toolbar-hotkey="L" data-multiline="" data-ga-click="Markdown Toolbar, click, task list" data-surround-with-newlines="">
              <svg aria-hidden="true" class="octicon octicon-tasklist" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M15.41 9H7.59C7 9 7 8.59 7 8c0-.59 0-1 .59-1h7.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM9.59 4C9 4 9 3.59 9 3c0-.59 0-1 .59-1h5.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1H9.59zM0 3.91l1.41-1.3L3 4.2 7.09 0 8.5 1.41 3 6.91l-3-3zM7.59 12h7.81c.59 0 .59.41.59 1 0 .59 0 1-.59 1H7.59C7 14 7 13.59 7 13c0-.59 0-1 .59-1z"></path></svg>
            </button>
        </div>

      </div>
      <nav class="tabnav-tabs" role="tablist">
        <button type="button" class="btn-link tabnav-tab write-tab js-write-tab selected " role="tab" aria-selected="true">Write</button>
        <button type="button" class="btn-link tabnav-tab preview-tab js-preview-tab " role="tab">Preview</button>
      </nav>
  </div>


  <div class="comment-form-error js-comment-form-error" style="display:none">    There was an error creating your Gist.
</div>
  <div class="write-content js-write-bucket js-uploadable-container js-upload-markdown-image is-default upload-enabled" data-upload-policy-url="/upload/policies/assets">

    <input type="hidden" name="saved_reply_id" class="js-saved-reply-id js-resettable-field" value="" data-reset-value="">

    <textarea name="comment[body]" tabindex="1" id="new_comment_field" placeholder="Leave a comment" aria-label="Comment body" class="form-control input-contrast comment-form-textarea js-comment-field js-improved-comment-field js-task-list-field js-quick-submit js-size-to-fit js-suggester-field js-quote-selection-target js-session-resumable"></textarea>

          <p class="drag-and-drop">
    <span class="default">
        Attach files by dragging &amp; dropping,
        <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser" aria-label="Attach files to your comment">
        <button class="btn-link manual-file-chooser-text" type="button" aria-hidden="true">selecting them</button>, or pasting
        from the clipboard.
    </span>
    <span class="loading">
      <img alt="" height="16" src="./laravel_files/octocat-spinner-32.gif" width="16"> Uploading your files…
    </span>
    <span class="error bad-file">
      Unfortunately, we don’t support that file type.
      <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button class="btn-link manual-file-chooser-text">Try again</button> with a
        PNG, GIF, JPG, DOCX, PPTX, XLSX, TXT, PDF, or ZIP.
      </span>
    </span>
    <span class="error bad-permissions">
      Attaching documents requires write permission to this repository.
      <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button class="btn-link manual-file-chooser-text">Try again</button> with a PNG, GIF, or JPG.
      </span>
    </span>
    <span class="error repository-required">
      Unfortunately, we don’t support that file type.
      <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button class="btn-link manual-file-chooser-text">Try again</button> with a PNG, GIF, or JPG.
      </span>
    </span>
    <span class="error too-big">
      Yowza, that’s a big file.
      <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button class="btn-link manual-file-chooser-text">Try again</button> with a file smaller than 10MB.
      </span>
    </span>
    <span class="error empty">
      This file is empty.
      <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button class="btn-link manual-file-chooser-text">Try again</button> with a file that’s not empty.
      </span>
    </span>
    <span class="error hidden-file">
      This file is hidden.
      <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button class="btn-link manual-file-chooser-text">Try again</button> with another file.
      </span>
    </span>
    <span class="error failed-request">
      Something went really wrong, and we can’t process that file.
      <input type="file" multiple="multiple" class="manual-file-chooser js-manual-file-chooser">
      <span class="drag-and-drop-error-info">
        <button class="btn-link manual-file-chooser-text">Try again.</button>
      </span>
    </span>
  </p>


    <div class="suggester-container">
      <div class="suggester js-suggester js-navigation-container" data-url="/JeffreyWay/5112282/suggestions">
      </div>
    </div>
  </div>

  <div class="preview-content">
    <div class="comment">
  <div class="comment-body markdown-body js-preview-body">
    <p>Nothing to preview</p>
  </div>
</div>

  </div>

  <div class="toolbar-help">
      <a class="tabnav-extra" href="https://guides.github.com/features/mastering-markdown/" target="_blank" data-ga-click="Markdown Toolbar, click, help">
        <svg aria-hidden="true" class="octicon octicon-markdown" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z"></path></svg>
        Styling with Markdown is supported
      </a>
  </div>


  <div class="comment-form-error comment-form-bottom js-comment-update-error"></div>
</div>


      <div class="form-actions">
        <div id="partial-new-comment-form-actions">
  <button type="submit" class="btn btn-primary" tabindex="2" data-disable-with="" data-disable-invalid="">
    Comment
  </button>
</div>


      </div>
    </div>
</form></div>

      </div>
    </div>
  </div>
</div>
  </div>

  <div class="modal-backdrop js-touch-events"></div>
</div><!-- /.container -->

    </div><!-- /.gist-pjax-container -->
  </div>

    </div>

        <div class="container site-footer-container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links float-right">
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
      <li><a href="https://developer.github.com/" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com/" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com/" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>

    <a href="https://github.com/" aria-label="Homepage" class="site-footer-mark" title="GitHub">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>
    <ul class="site-footer-links">
      <li>© 2016 <span title="0.23927s from github-fe-acdc16e.cp1-iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a href="https://help.github.com/" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>
  </div>
</div>



    

    <div id="ajax-error-message" class="ajax-error-message flash flash-error">
      <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"></path></svg>
      <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
        <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
      </button>
      You can't perform that action at this time.
    </div>


      
      <script crossorigin="anonymous" integrity="sha256-iEca8f7ED/lBjvvi3dFbaJavjXcvgXkATCVN/8JepJA=" src="./laravel_files/frameworks-88471af1fec40ff9418efbe2ddd15b6896af8d772f8179004c254dffc25ea490.js"></script>
      <script async="async" crossorigin="anonymous" integrity="sha256-XAA/pLghrZnayuEua83IiBesduT9t9LhQQPDQc64fO0=" src="./laravel_files/github-5c003fa4b821ad99dacae12e6bcdc88817ac76e4fdb7d2e14103c341ceb87ced.js"></script>
      
      
      
      
      
      
    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
      <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"></path></svg>
      <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="https://gist.github.com/JeffreyWay/5112282">Reload</a> to refresh your session.</span>
      <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="https://gist.github.com/JeffreyWay/5112282">Reload</a> to refresh your session.</span>
    </div>
    <div class="facebox" id="facebox" style="display:none;">
  <div class="facebox-popup">
    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
    </div>
    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
    </button>
  </div>
</div>

  


</body></html>