<?php

//----------------------------------------------------------------------
//
//  Copyright (C) 2015-2022 Artem Rodygin
//
//  This file is part of DataTables Symfony bundle.
//
//  You should have received a copy of the MIT License along with
//  the bundle. If not, see <http://opensource.org/licenses/MIT>.
//
//----------------------------------------------------------------------

namespace DataTables\Handler;

use DataTables\DataTableHandlerInterface;
use DataTables\DataTableQuery;
use DataTables\DataTableResults;

class SuccessfulTestDataTable implements DataTableHandlerInterface
{
    public function handle(DataTableQuery $request, array $context = []): DataTableResults
    {
        $results = new DataTableResults();

        $results->recordsTotal    = 100;
        $results->recordsFiltered = $context['test'] ?? 10;
        $results->data            = [];

        return $results;
    }
}
