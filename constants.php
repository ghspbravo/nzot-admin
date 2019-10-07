<?php
const CONFIG_FILE_NAME = "portfolio.json";
const CONFIG_FILE_PATH = "./" . CONFIG_FILE_NAME;

const EN_CONFIG_FILE_NAME = "portfolio_blank.json";
const EN_CONFIG_FILE_PATH = "./" . EN_CONFIG_FILE_NAME;

const ASSETS_DIR = "./res/";
const PREVIEW_PASS_PATH = ASSETS_DIR . "later.jpg";

const BACK_URL = '/';

function getProjectById($projects, $id)
{
  foreach ($projects as $index => $item) {
    if ($item->id === $id) {
      return (int) $index;
    }
  }
  return $id;
}

function getLastId($projects)
{
  $currentMax = 0;
  foreach ($projects as $project) {
    if ($project->id > $currentMax) {
      $currentMax = $project->id;
    }
  }
  return $currentMax;
}
