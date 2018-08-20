<?php

echo "Started pushback to GitHub";

$ci_token="5f046b7165077b029b14f287676982def58491f4";
$org="yoodame";
$repo="pantheon_sync";
$branch="master";

$cmd="curl -u $ci_token: \
      -d build_parameters[CIRCLE_JOB]=push_back \
      https://circleci.com/api/v1.1/project/github/$org/$repo/tree/$branch";

exec($cmd,$result);