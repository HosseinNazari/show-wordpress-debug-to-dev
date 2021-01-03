// You can use this code to view site errors at the following address:
// yoursite.com/?hn=true
if (isset($_GET['hn']) && $_GET['hn'] == 'true') {
    define('WP_DEBUG', true);
}
else {
    define('WP_DEBUG', false);
}
