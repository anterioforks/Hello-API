<?php

/**
 * @apiGroup           Emails
 * @apiName            SetVisitorEmailController
 * @api                {post} /visitors/email Set visitor Email
 * @apiVersion         1.0.0
 * @apiPermission      visitor
 *
 * @apiHeader          Accept application/json (required)
 * @apiHeader          visitor-id The Device ID [12345] (required)
 *
 * @apiParam           {String}     email
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 200 OK
{
   "message":"Visitor Email Saved Successfully."
}
 */

$router->post('/visitors/email', [
    'uses'       => 'Controller@setVisitorEmailController',
    'middleware' => [
        'api.auth.visitor',
    ],
]);
