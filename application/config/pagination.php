<?php
// This is pagination config file

// The pagination function automatically determines which segment of your URI contains the page number. If you need something different you can specify it.
$config['uri_segment'] = 3;

// The number of “digit” links you would like before and after the selected page number. For example, the number 2 will place two digits on either side, as in the example links at the very top of this page.
$config['num_links'] = 1;

// By default, the URI segment will use the starting index for the items you are paginating. If you prefer to show the the actual page number, set this to TRUE.
$config['use_page_numbers'] = TRUE;

/* By default, the pagination library assume you are using URI Segments, and constructs your links something like:

http://example.com/index.php/test/page/20
If you have $config['enable_query_strings'] set to TRUE your links will automatically be re-written using Query Strings. This option can also be explictly set. Using $config['page_query_string'] set to TRUE, the pagination link will become:

http://example.com/index.php?c=test&m=page&per_page=20
Note that “per_page” is the default query string passed, however can be configured using $config['query_string_segment'] = 'your_string'
*/
$config['page_query_string'] = FALSE;

/* By default your Query String arguments (nothing to do with other query string options) will be ignored. Setting this config to TRUE will add existing query string arguments back into the URL after the URI segment and before the suffix.:

http://example.com/index.php/test/page/20?query=search%term
*/
$config['reuse_query_string'] = FALSE;

// A custom prefix added to the path. The prefix value will be right before the offset segment.
$config['prefix'] = '';

// A custom suffix added to the path. The sufix value will be right after the offset segment.
$config['suffix'] = '';

// When set to TRUE, it will override the $config['suffix'] value and instead set it to the one that you have in $config['url_suffix'] in your application/config/config.php file.
$config['use_global_url_suffix'] = FALSE;

// --------------------- Adding Enclosing Markup ----------------------//
// If you would like to surround the entire pagination with some markup you can do it with these two preferences:

// The opening tag placed on the left side of the entire result.
$config['full_tag_open'] = '<nav><ul class="pagination">';

// The closing tag placed on the right side of the entire result.
$config['full_tag_close'] = '</ul></nav>';

// -------------------- Customizing the First Link --------------------//
// The text you would like shown in the “first” link on the left. If you do not want this link rendered, you can set its value to FALSE.
$config['first_link'] = 'First';

// The opening tag for the “first” link.
$config['first_tag_open'] = '<li>';

// The closing tag for the “first” link.
$config['first_tag_close'] = '</li>';

// An alternative URL to use for the “first page” link.
$config['first_url'] = '';

// ---------------------- Customizing the Last Link -----------------------//
// The text you would like shown in the “last” link on the right. If you do not want this link rendered, you can set its value to FALSE.
$config['last_link'] = 'Last';

// The opening tag for the “last” link.
$config['last_tag_open'] = '<li>';

// The closing tag for the “last” link.
$config['last_tag_close'] = '</li>';

// ------------------ Customizing the “Next” Link ------------------------//
// The text you would like shown in the “next” page link. If you do not want this link rendered, you can set its value to FALSE.
$config['next_link'] = '&raquo;';

// The opening tag for the “next” link.
$config['next_tag_open'] = '<li>';

// The closing tag for the “next” link.
$config['next_tag_close'] = '</li>';

// ----------------------- Customizing the “Previous” Link -----------------//
// The text you would like shown in the “previous” page link. If you do not want this link rendered, you can set its value to FALSE.
$config['prev_link'] = '&laquo;';

// The opening tag for the “previous” link.
$config['prev_tag_open'] = '<li>';

// The closing tag for the “previous” link.
$config['prev_tag_close'] = '</li>';

// ----------------------- Customizing the “Current Page” Link ---------------//
// The opening tag for the “current” link.
$config['cur_tag_open'] = '<li class="active"><span>';

// The closing tag for the “current” link.
$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';

// ---------------------- Customizing the “Digit” Link --------------------//
// The opening tag for the “digit” link.
$config['num_tag_open'] = '<li>';

// The closing tag for the “digit” link.
$config['num_tag_close'] = '</li>';


// -------------------- Hiding the Pages ---------------------------------//
// If you wanted to not list the specific pages (for example, you only want “next” and “previous” links), you can suppress their rendering by adding:
$config['display_pages'] = TRUE;

// -------------------- Disabling the “rel” attribute ------------------------//
// By default the rel attribute is dynamically generated and appended to the appropriate anchors. If for some reason you want to turn it off, you can pass boolean FALSE as a regular attribute
$config['attributes']['rel'] = TRUE;





