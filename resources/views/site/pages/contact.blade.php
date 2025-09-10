@extends('site.layouts.app')
@section('title','Contact Us')
@section('content')
<section class="container" style="padding:60px 0">
  <div id="contact-504" class="staticPage ck-editor-h">
    <style>
      /* Scoped styles for contact 504 content */
      #contact-504 .staticPage {
        padding: 10px 0 0;
        margin-bottom: 0;
      }

      #contact-504 *,
      #contact-504 *::before,
      #contact-504 *::after {
        box-sizing: border-box;
      }

      #contact-504 .c {
        text-align: center;
        display: block;
        position: relative;
        width: 80%;
        margin: 0 auto;
      }

      #contact-504 ._503 {
        font-size: 220px;
        position: relative;
        display: inline-block;
        z-index: 2;
        height: 250px;
        letter-spacing: 15px;
      }

      #contact-504 hr {
        padding: 0;
        border: none;
        border-top: 5px solid #eee;
        color: #fff;
        text-align: center;
        margin: 0 auto;
        width: 420px;
        height: 10px;
        z-index: -10;
      }

      #contact-504 ._1 {
        text-align: center;
        display: block;
        position: relative;
        letter-spacing: 12px;
        font-size: 4em;
        line-height: 80%;
      }

      #contact-504 ._2 {
        text-align: center;
        display: block;
        position: relative;
        margin-top: 10px;
        font-size: 20px;
      }

      #contact-504 .btn {
        background-color: #00a1e8;
        position: relative;
        display: inline-block;
        width: 358px;
        padding: 5px;
        z-index: 5;
        font-size: 25px;
        margin: 0 auto;
        color: #ffffff;
        text-decoration: none;
        margin-right: 10px;
        margin-top: 15px;
      }
    </style>

    <div class="c">
      <div class="_503">504</div>
      <hr>
      <div class="_1">SERVICE UNAVAILABLE.<br>&nbsp;</div>
      <div class="_2">The site is currently under maintenance and we apologise for any inconvenience. We will be back up soon.<br>&nbsp;</div>
      <a class="btn homeredirect" href="/tomy">REFRESH PAGE</a>
    </div>
  </div>
</section>
<script>
  // Set refresh link to appropriate home path without using jQuery
  document.addEventListener('DOMContentLoaded', function() {
    var urlPath = window.location.pathname || '/';
    var slashMatches = urlPath.match(/\//g);
    var slashCount = slashMatches ? slashMatches.length : 0;
    var redirectHref = '/';
    if (slashCount === 2) {
      var firstMatch = urlPath.match(/^\/([^\/]*)\//);
      if (firstMatch && firstMatch[1]) {
        redirectHref = '/' + firstMatch[1];
      }
    }
    var links = document.querySelectorAll('#contact-504 .homeredirect');
    links.forEach(function(link) {
      link.setAttribute('href', redirectHref);
    });

    // Dynamically adjust section height minus navbar/header height for true vertical centering
    function resizeContactSection() {
      var section = document.getElementById('contact-504-section');
      if (!section) return;
      var header = document.querySelector('header') || document.querySelector('nav');
      var headerHeight = header ? header.offsetHeight : 0;
      section.style.minHeight = 'calc(100vh - ' + headerHeight + 'px)';
    }

    resizeContactSection();
    window.addEventListener('resize', resizeContactSection);
  });
</script>
@endsection