<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css"/>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript">
        $(document).ready( function () {
        let table = $('#records').DataTable({
            columnDefs: [
                { orderable: false, targets: [0, 1, 2, 4] },
                { "searchable": false, "targets": [1, 2, 3, 4] }
            ],
            order: [[3, 'dsc']
            ]
        });
    });
    </script>

</head>
<body>
    <h1>Records</h1>
    <table id="records" class="display">
        <thead>
            <tr>
                <th>NetworkOfferId</th>
                <th>LongName</th>
                <th>Categories</th>
                <th>Countries</th>
                <th>Bid</th>
                <th>Device Type</th>
                <th>Operating System</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
                <tr>
                    <td><?= h($record->NetworkOfferId) ?></td>
                    <td><?= h($record->LongName) ?></td>
                    <td><?= h($record->Categories) ?></td>
                    <td><?= h($record->Countries) ?></td>
                    <td><?= h($record->Bid) ?></td>
                    <td><?= h($record->DeviceType) ?></td>
                    <td><?= h($record->OperatingSystem) ?></td>
                    <td><?= h($record->Action) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
