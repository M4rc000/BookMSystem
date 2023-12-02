<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GoogleOAuthController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function authenticate() {
        // Load the Google API client library
        require_once APPPATH . 'libraries/vendor/autoload.php';

        // Set up the Google API client
        $client = new Google_Client();
        $client->setAuthConfig('path/to/client_secret.json'); // Path to the JSON file from Google Cloud Console
        $client->setRedirectUri(base_url('googleoauthcontroller/callback'));
        $client->addScope('email');

        // Redirect the user to the Google authentication URL
        redirect($client->createAuthUrl());
    }

    public function callback() {
        // Load the Google API client library
        require_once APPPATH . 'libraries/vendor/autoload.php';

        // Set up the Google API client
        $client = new Google_Client();
        $client->setAuthConfig('path/to/client_secret.json'); // Path to the JSON file from Google Cloud Console
        $client->setRedirectUri(base_url('googleoauthcontroller/callback'));
        $client->addScope('email');

        // Get the authorization code from the URL
        $code = $this->input->get('code');

        // Exchange authorization code for access token
        $accessToken = $client->fetchAccessTokenWithAuthCode($code);

        // Store the access token in the session or database as needed
        $this->session->set_userdata('access_token', $accessToken);

        // Redirect to your desired page after authentication
        redirect('dashboard');
    }
}
