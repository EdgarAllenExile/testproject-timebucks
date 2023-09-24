<?php
namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Http\Client;

class SeedCommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io): int
    {
        $conection = mysqli_connect('localhost', 'testproject_timebucks', 'chicken', 'testproject_timebucks') or die('Error in Connecting: ' . mysqli_error($conection));
        $json = file_get_contents('./TestProject/data.json');
        $data = json_decode($json, true);
        $statement = mysqli_prepare($conection, 'INSERT INTO records (RecordId, AdvertiserId, NetworkOfferId, TaskCampaignId, LongName, ShortName, Description, Instructions, Categories, Countries, Bid, ImageUrl, TrackingUrl, LastChangeDate, MultipleConvAllowed, MultipleConvRules, DailyCap, TotalCap, NetworkECPC, TbECPC, SupportUrl, PreviewUrl, UserAgents, DeviceType, OperatingSystem, Other, Hash, IsActive, Network) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

        mysqli_stmt_bind_param($statement, 'iiiissssssisssisiiiisssssssis', $RecordId, $AdvertiserId, $NetworkOfferId, $TaskCampaignId, $LongName, $ShortName, $Description, $Instructions, $Categories, $Countries, $Bid, $ImageUrl, $TrackingUrl, $LastChangeDate, $MultipleConvAllowed, $MultipleConvRules, $DailyCap, $TotalCap, $NetworkECPC, $TbECPC, $SupportUrl, $PreviewUrl, $UserAgents, $DeviceType, $OperatingSystem, $Other, $Hash, $IsActive, $Network);

        foreach ($data as $row) {
            $RecordId = $row['Id'];  
            $AdvertiserId = $row['AdvertiserId'];  
            $NetworkOfferId = $row['NetworkOfferId'];  
            $TaskCampaignId = $row['TaskCampaignId'];  
            $LongName = $row['LongName'];  
            $ShortName = $row['ShortName'];  
            $Description = $row['Description'];  
            $Instructions = $row['Instructions'];  
            $Categories = $row['Categories'];  
            $Countries = $row['Countries'];  
            $Bid = $row['Bid'];  
            $ImageUrl = $row['ImageUrl'];  
            $TrackingUrl = $row['TrackingUrl'];  
            $LastChangeDate = $row['LastChangeDate'];  
            $MultipleConvAllowed = $row['MultipleConvAllowed'];  
            $MultipleConvRules = $row['MultipleConvRules'];  
            $DailyCap = $row['DailyCap'];  
            $TotalCap = $row['TotalCap'];  
            $NetworkECPC = $row['NetworkECPC'];  
            $TbECPC = $row['TbECPC'];  
            $SupportUrl = $row['SupportUrl'];  
            $PreviewUrl = $row['PreviewUrl'];  
            $UserAgents = $row['UserAgents'];  
            $DeviceType = $row['DeviceType'];  
            $OperatingSystem = $row['OperatingSystem'];  
            $Other = $row['Other'];  
            $Hash = $row['Hash'];  
            $IsActive = $row['IsActive']; 
            $Network = $row['Network'];

            mysqli_stmt_execute($statement);
        } 

        $io->out('Information Loaded');

        return static::CODE_SUCCESS;
        mysqli_close($conection);
    }
}