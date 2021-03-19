<?php 

// For configuration
$config = require 'config.php';

require 'function.php';

// For routing
require 'core/Router.php';

// For create connection with database
require 'core/database/Connection.php';

// For Build the queries
require 'core/database/QueryBuilder.php';

return new QueryBuilder(
			Connection::make($config['database'])
		);