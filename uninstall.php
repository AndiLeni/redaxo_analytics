<?php

rex_sql_table::get(rex::getTable('pagestats_dump'))->drop();
rex_sql_table::get(rex::getTable('pagestats_bot'))->drop();