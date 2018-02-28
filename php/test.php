<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/7
 * Time: 16:06
 */
$test = '{"access_token":"6_p15qSM7N1pbThc8LEnSXdGaI5GMvmuaKE_e8IwZucMvSt6sIt6RZp_q0BORRAmSR8rky-75-Cng8BH-g4Pn2a-7RHpjgz5u_ejVv6M4wSQLSD2tF9dlcUHMcH6jcpVF5rl62m5IchID3an3xLQFfAHAWBQ","expires_in":7200}';
var_dump(json_decode($test) -> access_token);

