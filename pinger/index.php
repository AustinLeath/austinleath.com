<?php

$title = "UNT Infrastructure Integrity Checker";
$servers = array(
  'admin.unt.edu' => array( 'ip' => 'admin.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'art.unt.edu' => array( 'ip' => 'art.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'ci.unt.edu' => array( 'ip' => 'ci.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'clear.unt.edu' => array( 'ip' => 'clear.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'cmht.unt.edu' => array( 'ip' => 'cmht.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'cob.unt.edu' => array( 'ip' => 'cob.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'coe.unt.edu' => array( 'ip' => 'coe.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'courses.unt.edu' => array( 'ip' => 'courses.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'cse.unt.edu' => array( 'ip' => 'cse.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'cvad.unt.edu' => array( 'ip' => 'cvad.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'cws.unt.edu' => array( 'ip' => 'cws.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'datacomm.unt.edu' => array( 'ip' => 'datacomm.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'dpdcn.unt.edu' => array( 'ip' => 'dpdcn.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'engineering.unt.edu' => array( 'ip' => 'engineering.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'enrollment.unt.edu' => array( 'ip' => 'enrollment.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'essc.unt.edu' => array( 'ip' => 'essc.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'gabdcn.its.unt.edu' => array( 'ip' => 'gabdcn.its.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'gabdcn.unt.edu' => array( 'ip' => 'gabdcn.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'gallery.unt.edu' => array( 'ip' => 'gallery.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'healthcenter.unt.edu' => array( 'ip' => 'healthcenter.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'hps.unt.edu' => array( 'ip' => 'hps.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'hsc.unt.edu' => array( 'ip' => 'hsc.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'informationscience.unt.edu' => array( 'ip' => 'informationscience.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'it.unt.edu' => array( 'ip' => 'it.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'itss.untsystem.edu' => array( 'ip' => 'itss.untsystem.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'jazz.unt.edu' => array( 'ip' => 'jazz.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'journalism.unt.edu' => array( 'ip' => 'journalism.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'learningtechnologies.unt.edu' => array( 'ip' => 'learningtechnologies.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'library.hsc.unt.edu' => array( 'ip' => 'library.hsc.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'lt.unt.edu' => array( 'ip' => 'lt.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'mdr.unt.edu' => array( 'ip' => 'mdr.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'music.unt.edu' => array( 'ip' => 'music.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'online.unt.edu' => array( 'ip' => 'online.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'pacs.unt.edu' => array( 'ip' => 'pacs.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'president.unt.edu' => array( 'ip' => 'president.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'recsports.unt.edu' => array( 'ip' => 'recsports.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'research.unt.edu' => array( 'ip' => 'research.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'sharepoint.unt.edu' => array( 'ip' => 'sharepoint.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'studentaffairs.unt.edu' => array( 'ip' => 'studentaffairs.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'teo.unt.edu' => array( 'ip' => 'teo.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'unt.edu' => array( 'ip' => 'unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'untdallas.edu' => array( 'ip' => 'untdallas.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'untdallas.unt.edu' => array( 'ip' => 'untdallas.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'unthsc.edu' => array( 'ip' => 'unthsc.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'vpaa.unt.edu' => array( 'ip' => 'vpaa.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'wdc.unt.edu' => array( 'ip' => 'wdc.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'global.wildcard.unt.edu' => array( 'ip' => 'global.wildcard.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'library-apps.hsc.unt.edu' => array( 'ip' => 'library-apps.hsc.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'military.hist.unt.edu' => array( 'ip' => 'military.hist.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'resnet.hsl.unt.edu' => array( 'ip' => 'resnet.hsl.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'tedxunt.org' => array( 'ip' => 'tedxunt.org', 'port' => 80, 'port_description' => 'Port 80' ),
  'tgs.unt.edu' => array( 'ip' => 'tgs.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'twu-unt-msw.com' => array( 'ip' => 'twu-unt-msw.com', 'port' => 80, 'port_description' => 'Port 80' ),
  'twu-unt-msw.org' => array( 'ip' => 'twu-unt-msw.org', 'port' => 80, 'port_description' => 'Port 80' ),
  'unthstix.com' => array( 'ip' => 'unthstix.com', 'port' => 80, 'port_description' => 'Port 80' ),
  'untsystem.edu' => array( 'ip' => 'untsystem.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'dining.unt.edu' => array( 'ip' => 'dining.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'emergency.unt.edu' => array( 'ip' => 'emergency.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'inspirefrisco.com' => array( 'ip' => 'inspirefrisco.com', 'port' => 80, 'port_description' => 'Port 80' ),
  'inspirefrisco.net' => array( 'ip' => 'inspirefrisco.net', 'port' => 80, 'port_description' => 'Port 80' ),
  'inspirefrisco.org' => array( 'ip' => 'inspirefrisco.org', 'port' => 80, 'port_description' => 'Port 80' ),
  'ntdaily.com' => array( 'ip' => 'ntdaily.com', 'port' => 80, 'port_description' => 'Port 80' ),
  'ntdaily.net' => array( 'ip' => 'ntdaily.net', 'port' => 80, 'port_description' => 'Port 80' ),
  'police.unt.edu' => array( 'ip' => 'police.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'studentactivities.unt.edu' => array( 'ip' => 'studentactivities.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'tedxunt.org' => array( 'ip' => 'tedxunt.org', 'port' => 80, 'port_description' => 'Port 80' ),
  'themayborn.com' => array( 'ip' => 'themayborn.com', 'port' => 80, 'port_description' => 'Port 80' ),
  'untfbtix.com' => array( 'ip' => 'untfbtix.com', 'port' => 80, 'port_description' => 'Port 80' ),
  'unthstix.com' => array( 'ip' => 'unthstix.com', 'port' => 80, 'port_description' => 'Port 80' ),
  'cvadweb1.unt.edu' => array( 'ip' => 'cvadweb1.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'galleries.cvad.unt.edu' => array( 'ip' => 'galleries.cvad.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'itservices.cvad.unt.edu' => array( 'ip' => 'itservices.cvad.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'news.cvad.unt.edu' => array( 'ip' => 'news.cvad.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'forms.cvad.unt.edu' => array( 'ip' => 'forms.cvad.unt.edu', 'port' => 80, 'port_description' => 'Port 80' ),
  'cvad-pi-101.cvad.unt.edu' => array( 'ip' => 'cvad-pi-101.cvad.unt.edu', 'port' => 80, 'port_description' => 'Port 80' )
);

if (isset($_GET['host'])) {
    $host = $_GET['host'];


    if (isset($servers[$host])) {
        header('Content-Type: application/json');

        $return = array(
            'status' => test($servers[$host])
        );

        echo json_encode($return);
        exit;
    } else {
        header("HTTP/1.1 404 Not Found");
    }
}

$names = array();
foreach ($servers as $name => $info) {
    $names[$name] = md5($name);
}


?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/cosmo/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
        <style type="text/css">
                /* Custom Styles */
        </style>
    </head>
    <body>

        <div class="container">
            <h1><?php echo $title; ?></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Port</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($servers as $name => $server): ?>

                        <tr id="<?php echo md5($name); ?>">
                            <td><i class="icon-spinner icon-spin icon-large"></i></td>
                            <td class="name"><?php echo $name; ?></td>
                            <td><?php echo $server['port_description']; ?></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript">

            function test(host, hash) {
                // Fork it
                var request;

                // fire off the request to /form.php
                request = $.ajax({
                    url: "<?php echo basename(__FILE__); ?>",
                    type: "get",
                    data: {
                        host: host
                    },
                    beforeSend: function () {
                        $('#' + hash).children().children().css({'visibility': 'visible'});
                    }
                });

                // callback handler that will be called on success
                request.done(function (response, textStatus, jqXHR) {
                    var status = response.status;
                    var statusClass;
                    if (status) {
                        statusClass = 'success';
                    } else {
                        statusClass = 'error';
                    }

                    $('#' + hash).removeClass('success error').addClass(statusClass);
                });

                // callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown) {
                    // log the error to the console
                    console.error(
                        "The following error occured: " +
                            textStatus, errorThrown
                    );
                });


                request.always(function () {
                    $('#' + hash).children().children().css({'visibility': 'hidden'});
                })

            }

            $(document).ready(function () {

                var servers = <?php echo json_encode($names); ?>;
                var server, hash;

                for (var key in servers) {
                    server = key;
                    hash = servers[key];

                    test(server, hash);
                    (function loop(server, hash) {
                        setTimeout(function () {
                            test(server, hash);

                            loop(server, hash);
                        }, 20000);
                    })(server, hash);
                }

            });
        </script>

    </body>
</html>
<?php
/* Misc at the bottom */
function test($server) {
    $socket = @fsockopen($server['ip'], $server['port'], $errorNo, $errorStr, 3);
    if ($errorNo == 0) {
        return true;
    } else {
        return false;
    }
}

function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

    return false;
}

?>
