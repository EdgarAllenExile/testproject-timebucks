<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css"/>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/date-1.5.1/sb-1.5.0/sp-2.2.0/sl-1.7.0/datatables.min.css" rel="stylesheet">    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/date-1.5.1/sb-1.5.0/sp-2.2.0/sl-1.7.0/datatables.min.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            const table = $('#records').DataTable({
            order: [[4, 'dsc']]
            });
        });

    </script>

    <script> 
        function incClickTrack(element) {
            let $obj = $(element).parents('td').closest('tr').find('.NetworkOfferId').html();
            $.ajax({
                type: "post",
                url: "<?= $this->Url->build(['controller' => 'Clicktracks','action' => 'click']) ?>",
                data:  {
                    NetworkOfferId: $obj
                }
            })
            console.log($obj)
        }
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
                    <td class="NetworkOfferId"><?= h($record->NetworkOfferId) ?></td>
                    <td><?= h($record->LongName) ?></td>
                    <td><?= h($record->Categories) ?></td>
                    <td><?= h($record->Countries) ?></td>
                    <td><?= h($record->Bid) ?></td>
                    <td><?= h($record->DeviceType) ?></td>
                    <td><?= h($record->OperatingSystem) ?></td>
                    <td>
                        <?php echo $this->Form->create(null, ['url' => ['controller' => 'Records', 'action' => 'addOrUpdateRecord']]); ?>
                        <?php echo $this->Form->button(__('Load')); ?>

                        <?php echo $this->Form->create(null, ['url' => ['controller' => 'Records', 'action' => 'getHash']]); ?>
                        <?php echo $this->Form->button(__('Hash')); ?>

                        </form>
                        <a href= <?=$record->TrackingUrl ?> onclick=incClickTrack(this) target="_blank" id="TrackingUrl">View</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>