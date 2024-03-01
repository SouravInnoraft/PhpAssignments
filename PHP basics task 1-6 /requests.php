<?php

/**
 * Requests for Email data.
 *
 * @param mixed $url
 *   Url of the website the user will be providing.
 * @return string
 *   Returns the user data.
 */
function request($url): string{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}
