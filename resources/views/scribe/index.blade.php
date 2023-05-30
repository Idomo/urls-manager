<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>URLs Manager Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .PHP-example code { display: none; }
                    body .content .JavaScript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean(1);
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.20.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.20.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;PHP&quot;,&quot;JavaScript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="PHP">PHP</button>
                                            <button type="button" class="lang-button" data-language-name="JavaScript">JavaScript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-urls-api" class="tocify-header">
                <li class="tocify-item level-1" data-unique="urls-api">
                    <a href="#urls-api">Urls API</a>
                </li>
                                    <ul id="tocify-subheader-urls-api" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="urls-api-GETapi-urls-generate">
                                <a href="#urls-api-GETapi-urls-generate">Generate unique random shortened url path</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="urls-api-GETapi-urls">
                                <a href="#urls-api-GETapi-urls">Get a list of the urls</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="urls-api-POSTapi-urls">
                                <a href="#urls-api-POSTapi-urls">Store a newly created url in database</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="urls-api-GETapi-urls--id-">
                                <a href="#urls-api-GETapi-urls--id-">Get specific url data</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="urls-api-PUTapi-urls--id-">
                                <a href="#urls-api-PUTapi-urls--id-">Update the specified url in database</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="urls-api-DELETEapi-urls--id-">
                                <a href="#urls-api-DELETEapi-urls--id-">Remove the specified url from database</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                        <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: 30 May 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This API CRUD urls.</p>
<aside>
    <strong>Base URL</strong>: <code>http://127.0.0.1:8000</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_API_TOKEN}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your API dashboard and clicking <a href="{{ route('profile.api.edit') }}">Generate Token</a>.</p>

        <h1 id="urls-api">Urls API</h1>

    <p>An API to CRUD URLs</p>

                                <h2 id="urls-api-GETapi-urls-generate">Generate unique random shortened url path</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-urls-generate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/urls/generate" \
    --header "Authorization: Bearer {YOUR_API_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/urls/generate',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_API_TOKEN}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="JavaScript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/urls/generate"
);

const headers = {
    "Authorization": "Bearer {YOUR_API_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-urls-generate">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IkhMc0pLeUtMRGFsV3hSNmVsM1VDeUE9PSIsInZhbHVlIjoiVEsxNFRYWE4yQmQzaXN3UjNxdmxvWGMybFI5Q0xKbTlkL3B0RzNod3NONThmcmN3NldpbjhhRDloczJtWkV6dG5ydWVUdzlwdEJPOWJQOHhJbUk0dE9PNnVyUUVEaUdyY2hHcURhTDdWVUZkbkMvM0pBQm9zYWtHRW45OUtldkQiLCJtYWMiOiI1MTE0Yjc5NjRkYzM5NjNmYjk2NTFhZmVjNzhjMTE1NTUxNWY0NjNmZWFlNDQxZDlhZTM0ZDhjZmJhYzIwODg3IiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:28 GMT; Max-Age=7200; path=/; samesite=lax; urls_manager_session=eyJpdiI6ImFWeDQrbGJoR2Y2SFRpS1FuajM2VXc9PSIsInZhbHVlIjoidnpncXRuamxtVjZMQ3VDbWZ2cGZGZ01TSGRZK292cTYvamtSNVc5enRXcEoxSmNidThndkxoZ2FkTDZESXR2Z3pXY3hGSUk5c2wvZmxTVFZ6QjQrenFmeGcxc0MrU1B4YlZpUUpuVGwybTRINzc5dmExVFN0cm5WTlFZUmNMMWciLCJtYWMiOiJkNzQ2YjM3YjJhZjc0YzFhYzViN2Y1YTU3OTAxMzFjMzNhYTgzNTc0M2E1YWRhODhkZWIwMDE0N2MxNDNkNWY3IiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:28 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;shortened&quot;: &quot;U8I6SIK2dD&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-urls-generate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-urls-generate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-urls-generate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-urls-generate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-urls-generate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-urls-generate" data-method="GET"
      data-path="api/urls/generate"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-urls-generate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-urls-generate"
                    onclick="tryItOut('GETapi-urls-generate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-urls-generate"
                    onclick="cancelTryOut('GETapi-urls-generate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-urls-generate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/urls/generate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-urls-generate"
               value="Bearer {YOUR_API_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_API_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-urls-generate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-urls-generate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>success</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>The succession of the operation</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shortened</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>The generated shortened path</p>
        </div>
                        <h2 id="urls-api-GETapi-urls">Get a list of the urls</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-urls">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/urls" \
    --header "Authorization: Bearer {YOUR_API_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/urls',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_API_TOKEN}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="JavaScript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/urls"
);

const headers = {
    "Authorization": "Bearer {YOUR_API_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-urls">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IlVWMTZJUVdMOGlsRklsVWRyNnJ6NGc9PSIsInZhbHVlIjoiR05Fc0YzVlhBVmpUd3l4R3R2dmZCclJkbU5HTERBTHBqRFdQUFJMZzhDL1RTSmo3N3FPZkVvT2srUEFVVWs2aENwQnpwWW14NFR1SytPUEQ1TnNib3U0YUh6UUtJYTkxN0M3UWh4NDZ2Qk14YnJJUElOZS9lSGEzdWZQa3ljSUIiLCJtYWMiOiI2YjViNGFiOTgwMWU0ZWI3YmE0MjY5ZmM0NjUzMDA0MDlkZDg1M2ZmYjA0YTI5MDk4YzM2YWNiMGRiYWVhNTRmIiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:28 GMT; Max-Age=7200; path=/; samesite=lax; urls_manager_session=eyJpdiI6Im43aEdlamRCZFJoLzJRUzFBc3pvK2c9PSIsInZhbHVlIjoiSXRNWlhqMkdlMGZqQzFRUmhHQ0FaYktjSEMralYrTXJGSFJ4a1JwMnp3cnR5c3pWV01RR0NqeUdNRUcrZE9DR1E3amppbzhwNUd2eWQ0VTZGbEJ4bFhwUDBrRjR6bUR4TU9tYXN1UTROME1qd1ZVMS9qcmxWeXJTR25uYTdRaUoiLCJtYWMiOiIxNWRhZGE4OGUzMjEyM2M2MjUzMmE0MzYzMWRiOTU4YTA2ZDdjY2I3NzU0YzQwYTE4YjU2ZjFlYTU2Zjg2MDZiIiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:28 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;urls&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;http://ebert.biz/excepturi-eos-ab-quia-delectus-et-dolores-dolore&quot;,
            &quot;shortened&quot;: &quot;mevegerlqnqrjzwyxph&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T18:16:56.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://gallery.idomo.site&quot;,
            &quot;shortened&quot;: &quot;EXcVfDqE6D&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://blogi.idomo.site&quot;,
            &quot;shortened&quot;: &quot;WCpFyc89eN&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://sandler.idomo.site&quot;,
            &quot;shortened&quot;: &quot;yVVzuPxYES&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://gallery.idomo.site&quot;,
            &quot;shortened&quot;: &quot;7Deqy27f3w&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://blogi.idomo.site&quot;,
            &quot;shortened&quot;: &quot;BUw1sZptvA&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://gallery.idomo.site&quot;,
            &quot;shortened&quot;: &quot;porX9x9Riw&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://gallery.idomo.site&quot;,
            &quot;shortened&quot;: &quot;a2hJc36DYG&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://blogi.idomo.site&quot;,
            &quot;shortened&quot;: &quot;CCH6Be3lDK&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://sandler.idomo.site&quot;,
            &quot;shortened&quot;: &quot;RMpQyrZkPz&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://sandler.idomo.site&quot;,
            &quot;shortened&quot;: &quot;HpWqGUmhGQ&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://aufderhar.biz/ex-temporibus-culpa-eum-non-quaerat-deleniti.html&quot;,
            &quot;shortened&quot;: &quot;nMIQXxSqFN&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;http://thiel.com/qui-quam-quisquam-nobis-deserunt-numquam-eligendi&quot;,
            &quot;shortened&quot;: &quot;4w1kCN0lVH&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://sandler.idomo.site&quot;,
            &quot;shortened&quot;: &quot;mW2bKSVbVy&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://gallery.idomo.site&quot;,
            &quot;shortened&quot;: &quot;JIH8Vl8SBJ&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://idomo.site&quot;,
            &quot;shortened&quot;: &quot;ZTv65M4RL1&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;http://hill.com/illo-accusamus-quia-et-similique-voluptatem&quot;,
            &quot;shortened&quot;: &quot;2WBOwxmrje&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://sandler.idomo.site&quot;,
            &quot;shortened&quot;: &quot;VaqU0eJtKK&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;http://farrell.com/similique-facere-qui-voluptatibus-inventore-vel-voluptatem-doloremque-occaecati.html&quot;,
            &quot;shortened&quot;: &quot;4YUAiYJ8th&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://sandler.idomo.site&quot;,
            &quot;shortened&quot;: &quot;HenQEb2rcH&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://gallery.idomo.site&quot;,
            &quot;shortened&quot;: &quot;EC9tMBhvIQ&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 22,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://gallery.idomo.site&quot;,
            &quot;shortened&quot;: &quot;MTuGO9Dt3r&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://blogi.idomo.site&quot;,
            &quot;shortened&quot;: &quot;ujczJ1j8y7&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 24,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://gallery.idomo.site&quot;,
            &quot;shortened&quot;: &quot;R3kHIK9CxU&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 25,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://blogi.idomo.site&quot;,
            &quot;shortened&quot;: &quot;6IhWc2HNA7&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;
        },
        {
            &quot;id&quot;: 251,
            &quot;uid&quot;: &quot;1&quot;,
            &quot;expanded&quot;: &quot;https://hegmann.biz/quia-neque-maxime-suscipit-molestiae-minus-sapiente.html&quot;,
            &quot;shortened&quot;: &quot;sbkueqcnfrbcn&quot;,
            &quot;created_at&quot;: &quot;2023-05-30T17:07:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2023-05-30T17:07:03.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-urls" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-urls"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-urls"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-urls" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-urls">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-urls" data-method="GET"
      data-path="api/urls"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-urls', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-urls"
                    onclick="tryItOut('GETapi-urls');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-urls"
                    onclick="cancelTryOut('GETapi-urls');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-urls"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/urls</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-urls"
               value="Bearer {YOUR_API_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_API_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-urls"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-urls"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>success</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>The succession of the operation</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>urls</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
<br>
<p>An array with URLs</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>uid</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>expanded</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>shortened</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>created_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>updated_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                    </details>
        </div>
                        <h2 id="urls-api-POSTapi-urls">Store a newly created url in database</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-urls">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/urls" \
    --header "Authorization: Bearer {YOUR_API_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"expanded\": \"https:\\/\\/rippin.com\\/doloribus-sint-quisquam-cum-enim-eos.html\",
    \"shortened\": \"xjptw\"
}"
</code></pre></div>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://127.0.0.1:8000/api/urls',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_API_TOKEN}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'expanded' =&gt; 'https://rippin.com/doloribus-sint-quisquam-cum-enim-eos.html',
            'shortened' =&gt; 'xjptw',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="JavaScript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/urls"
);

const headers = {
    "Authorization": "Bearer {YOUR_API_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "expanded": "https:\/\/rippin.com\/doloribus-sint-quisquam-cum-enim-eos.html",
    "shortened": "xjptw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-urls">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IjhyR1lVc2hrRVJpZisrTTE0R2ZyWnc9PSIsInZhbHVlIjoiWlc3TXVpNG1YaVZXcFpaNlVUUysrbllKZXQrNFhLMmYva1BDSVJ3aDlLK3ZjZGpiOUFBYUJ4MWRkR29QMm5mT0hpUnoxdmNYZkNZUjBhQTJwWlVPTkFUaUpVTGZjVTN4QmZxc005bUJNVTRxTkdnd0x2QXkrNWQ5RDIxQWhJQjAiLCJtYWMiOiIwODk1YjMwZjQwM2VlYTA0ODI2MjI3MjdiOGQ2ODdhNDA2YWNmYWQzYzc2YmQyMjU3YzZmNTUxZmY1ZDRjMDBiIiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:28 GMT; Max-Age=7200; path=/; samesite=lax; urls_manager_session=eyJpdiI6Imdxc0p2NFkxb1FsQjNNTkVCSkxaMUE9PSIsInZhbHVlIjoiaWFIUXg4OEU2M2k4WldacnhhRHVEeGZqOWM3NkZSRWFQdTlZYzkyUS9uY3d0cEVYYlVnWUtDMzZ0WldwTDFtRVBaQUFkSFpaeEN3TWtZVFhWNXp1RFRZcnI1TFQ2NVBDWkE2QlNrMS8vLzJHSkNOTWNhbWJKU2VwQ1Y1alk2MXIiLCJtYWMiOiJkZjEwODJjZmE5ODU5MjM4YTZjZmZiYzI0NzQ4ZWVmMDRkNWZiZTVhMzU3NjIzZDRjNWFjYWNlYjFkMjBhN2JkIiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:28 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-urls" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-urls"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-urls"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-urls" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-urls">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-urls" data-method="POST"
      data-path="api/urls"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-urls', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-urls"
                    onclick="tryItOut('POSTapi-urls');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-urls"
                    onclick="cancelTryOut('POSTapi-urls');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-urls"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/urls</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="POSTapi-urls"
               value="Bearer {YOUR_API_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_API_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-urls"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-urls"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expanded</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="expanded"                data-endpoint="POSTapi-urls"
               value="https://rippin.com/doloribus-sint-quisquam-cum-enim-eos.html"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>https://rippin.com/doloribus-sint-quisquam-cum-enim-eos.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shortened</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="shortened"                data-endpoint="POSTapi-urls"
               value="xjptw"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>xjptw</code></p>
        </div>
        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>success</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>The succession of the operation</p>
        </div>
                        <h2 id="urls-api-GETapi-urls--id-">Get specific url data</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-urls--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/urls/1" \
    --header "Authorization: Bearer {YOUR_API_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/urls/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_API_TOKEN}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="JavaScript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/urls/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_API_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-urls--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6InFoenFkNlgwa1k2OHpkNkxrdWpWWEE9PSIsInZhbHVlIjoiWERqcDI2akZoeUhHY3h4ekdRMkkyRzhFL0ZUWjBsOFUyQUNZT1NLaHRPbVNGNnZMUU1pVytJeElKVjIzZFdqMlRHbFB6TXVqMUtvT1ZrekpGKytFclVZTmF4QUVaR0tDNEtmVXJYSUxDODBJU3JiSmU2d1MzdWovQXJIMlhwRGwiLCJtYWMiOiJiODZiZDU3YWVjZjkzNWE4YmJjOTBjOWE2NDFkZDc5OGJhNmRhZWQ5MDljYTlhOWQ4YmY1MGFmZWM1ZGYzZWVkIiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:29 GMT; Max-Age=7200; path=/; samesite=lax; urls_manager_session=eyJpdiI6IkRnZ0xsTllMNHhtUGg4K2MyNVhncEE9PSIsInZhbHVlIjoiblNxZzZKL2s0VW1nbTA2Smc3R0o1djI1NUxOWUNEN0Zxa3NjT2QyV3hsdzdhcWxYYTFGWmZUQWhCQmVOWDJWV0dlMUdXaHNLMUFYL3RXSXl0SEJ5b2JHMVRVbnNNMnFybGRab24rb3VELzRvcEhFK3BpdytwYURmVk5jdnM2MW8iLCJtYWMiOiIxNjAzYzIxZmU5MTM4ZmZiNmM2MDg0Y2FmM2Q3N2ZjZTRhZTcxZmE4N2RjMDdhZTZkOWFlM2IzNDRiMzMxNWQ4IiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:29 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;url&quot;: {
        &quot;id&quot;: 1,
        &quot;uid&quot;: &quot;1&quot;,
        &quot;expanded&quot;: &quot;http://ebert.biz/excepturi-eos-ab-quia-delectus-et-dolores-dolore&quot;,
        &quot;shortened&quot;: &quot;mevegerlqnqrjzwyxph&quot;,
        &quot;created_at&quot;: &quot;2023-05-30T11:21:08.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2023-05-30T18:16:56.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-urls--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-urls--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-urls--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-urls--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-urls--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-urls--id-" data-method="GET"
      data-path="api/urls/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-urls--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-urls--id-"
                    onclick="tryItOut('GETapi-urls--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-urls--id-"
                    onclick="cancelTryOut('GETapi-urls--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-urls--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/urls/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="GETapi-urls--id-"
               value="Bearer {YOUR_API_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_API_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-urls--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-urls--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="GETapi-urls--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the url. Example: <code>1</code></p>
            </div>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>success</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>The succession of the operation</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>
<p>A URL</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>uid</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>expanded</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>shortened</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>created_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>updated_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>

                    </div>
                                    </details>
        </div>
                        <h2 id="urls-api-PUTapi-urls--id-">Update the specified url in database</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-urls--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://127.0.0.1:8000/api/urls/1" \
    --header "Authorization: Bearer {YOUR_API_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"expanded\": \"http:\\/\\/abbott.com\\/omnis-ratione-laborum-consectetur-architecto-nihil-sunt-ipsum.html\",
    \"shortened\": \"jfbsgrracrkgnmqbl\"
}"
</code></pre></div>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://127.0.0.1:8000/api/urls/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_API_TOKEN}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'expanded' =&gt; 'http://abbott.com/omnis-ratione-laborum-consectetur-architecto-nihil-sunt-ipsum.html',
            'shortened' =&gt; 'jfbsgrracrkgnmqbl',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="JavaScript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/urls/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_API_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "expanded": "http:\/\/abbott.com\/omnis-ratione-laborum-consectetur-architecto-nihil-sunt-ipsum.html",
    "shortened": "jfbsgrracrkgnmqbl"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-urls--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IkN4UGgxZ2RGcDIzWlpYU2owb1luU3c9PSIsInZhbHVlIjoiQ2IrTEw1czQ5Z05jMC91TmIvZkJ0VHNoZC9mWGc1WFBNM2FVMEpBa0Q5Q1J5TFJ1MzFZbXJZeWZucEZiZ0VkZTIzOXVhOTVRMWZvWUViRWoxUnc5U2MySW9ScE1zWkpQeUdEMXpnQVZXaEZDY1ErUVMwbWpxUmFsZytqVEFBQkQiLCJtYWMiOiJkOGNkOTU3OTc3MzYxY2QzMDZhNTBmNDc4MjZkZDEzNGM2ODU0Y2U4ZTUzZDdmYjRiYmViMzA3MTMyZWUzZDVhIiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:29 GMT; Max-Age=7200; path=/; samesite=lax; urls_manager_session=eyJpdiI6InhCdkJKWENVT0J2VWQ5RHZyTHN6Tnc9PSIsInZhbHVlIjoiODFvMllBMkdKWHd1MDh4RUh4RWplMEtod2Y1T3hKbUtjT0FSMzBVWUp4anRVV0UwYTdRT2Z4UStUakczRVFwZkdyN1VPcmV0SGNWS0RXc3BsOUF0amJlbUJQM3BheDFQNW9jb05namFkYU9sazVVNHY2aS9TSHJSM0lvQlp0NFkiLCJtYWMiOiJmOTExNzU1YjU5OGRlNDdiMWI3Nzk5M2RlNzgxMDQ5YzA0YTM0MThmODUzNjQ1OWNjZTAwODBhOThmZWMxODhkIiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:29 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-urls--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-urls--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-urls--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-urls--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-urls--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-urls--id-" data-method="PUT"
      data-path="api/urls/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-urls--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-urls--id-"
                    onclick="tryItOut('PUTapi-urls--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-urls--id-"
                    onclick="cancelTryOut('PUTapi-urls--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-urls--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/urls/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/urls/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="PUTapi-urls--id-"
               value="Bearer {YOUR_API_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_API_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-urls--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-urls--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="PUTapi-urls--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the url. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>expanded</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="expanded"                data-endpoint="PUTapi-urls--id-"
               value="http://abbott.com/omnis-ratione-laborum-consectetur-architecto-nihil-sunt-ipsum.html"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://abbott.com/omnis-ratione-laborum-consectetur-architecto-nihil-sunt-ipsum.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shortened</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="shortened"                data-endpoint="PUTapi-urls--id-"
               value="jfbsgrracrkgnmqbl"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>jfbsgrracrkgnmqbl</code></p>
        </div>
        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>success</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>The succession of the operation</p>
        </div>
                        <h2 id="urls-api-DELETEapi-urls--id-">Remove the specified url from database</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-urls--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://127.0.0.1:8000/api/urls/1" \
    --header "Authorization: Bearer {YOUR_API_TOKEN}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://127.0.0.1:8000/api/urls/1',
    [
        'headers' =&gt; [
            'Authorization' =&gt; 'Bearer {YOUR_API_TOKEN}',
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="JavaScript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/urls/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_API_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-urls--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6InF1L2pjMktJRE9PeGhwTEVCdmdDeVE9PSIsInZhbHVlIjoiSDVnWE9DOGJBK1FuNjdXMDVOWGsxTG41UEUxQ1l5aVJZbEJxQUVtL0xIcjNPNEJ6NEg3bXNFcm9MUDJrcE1uRUpyd1BBcDR3SE83cnF2Z1FtRDd3Y2Vha09IRnF3eHhROXcyLzJ1UTd0MFFjUFNSVy9XWTEzOHljMnAwSHVMdGMiLCJtYWMiOiJiOWJhYTQxNjJlYjAyZTRlZTEyZTZiZmU4M2E4NzhiNDdiMDcxZmU0MmVkYjY0YjVlYjA4MTBiN2EyYmNmMTY1IiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:29 GMT; Max-Age=7200; path=/; samesite=lax; urls_manager_session=eyJpdiI6ImRkWnV0YXB4RUFPTi9LRHRxUFB3Z0E9PSIsInZhbHVlIjoiZzNVM1pYck1GZzVLNFA2UW5YTGNOUUMrZ0xXWlJKaXpCWGRDMlJZeVVvS3BwWko4eWNJL0pGV3NhSEo0UHFhWGZmT01wNGNZWmRFelhmM3pqaE1OVE5aSXc5THhnSnozbm1DY1FESW1UcVVGckI4VE9uSE1WSTNGZnp3dUFhSysiLCJtYWMiOiIwZWUyYjgwMWJlZWJmNDY2MWYzODc0OGQ0MTgzZGEwNWJmYmQ4MmM0YmMwYjFjYzNjMzQ3OWMyMzkzNDI2YmJhIiwidGFnIjoiIn0%3D; expires=Tue, 30 May 2023 20:28:29 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-urls--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-urls--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-urls--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-urls--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-urls--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-urls--id-" data-method="DELETE"
      data-path="api/urls/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-urls--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-urls--id-"
                    onclick="tryItOut('DELETEapi-urls--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-urls--id-"
                    onclick="cancelTryOut('DELETEapi-urls--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-urls--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/urls/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Authorization" class="auth-value"               data-endpoint="DELETEapi-urls--id-"
               value="Bearer {YOUR_API_TOKEN}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_API_TOKEN}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-urls--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-urls--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               name="id"                data-endpoint="DELETEapi-urls--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the url. Example: <code>1</code></p>
            </div>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>success</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>The succession of the operation</p>
        </div>
                

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="PHP">PHP</button>
                                                        <button type="button" class="lang-button" data-language-name="JavaScript">JavaScript</button>
                            </div>
            </div>
</div>
</body>
</html>
