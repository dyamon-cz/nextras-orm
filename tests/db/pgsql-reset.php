<?php declare(strict_types = 1);

use Nextras\Dbal\Connection;

return function (Connection $connection, $dbname) {
	$connection->query('DROP SCHEMA IF EXISTS public CASCADE');
	$connection->query('CREATE SCHEMA public');
};
