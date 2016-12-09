<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests;
use GuzzleHttp\Client;

class GroupsController extends Controller
{

    /**
     * Update groups table by BSUIR API.
     */
    public static function updateGroupsTable() {
        $groups = Group::select('number')->get();
        $client = new Client();
        $res = $client->request('GET', 'https://www.bsuir.by/schedule/rest/studentGroup');
        $xml_groups = ((new \SimpleXMLElement($res->getBody()->getContents())));
        $count = count($groups);

        for ($j = 0; $j < $count; $j++) {
            for ($i = 0; $i < count($xml_groups); $i++) {
                if (!strcmp($groups[$j]->number, $xml_groups->studentGroup[$i]->name->__toString())) {
                    unset($groups[$j]);
                    unset($xml_groups->studentGroup[$i]);
                    break;
                }
            }
        }

        $new_groups = [];

        for ($i = 0; $i < count($xml_groups); $i++) {
            $new_groups[] = [
                'number'        => $xml_groups->studentGroup[$i]->name->__toString(),
                'group_api_id'  => $xml_groups->studentGroup[$i]->id->__toString(),
                'faculty_id'    => 1,
            ];
        }

        Group::insert($new_groups);
    }
}
