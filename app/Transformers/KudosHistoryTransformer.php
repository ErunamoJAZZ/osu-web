<?php

/**
 *    Copyright 2015 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Transformers;

use App\Models\KudosHistory;
use League\Fractal;

class KudosHistoryTransformer extends Fractal\TransformerAbstract
{
    public function transform(KudosHistory $kudosHistory)
    {
        return [
            'id' => $kudosHistory->exchange_id,
            'giver' => [
                'id' => $kudosHistory->giver_id,
                'name' => $kudosHistory->giver->username,
            ],
            'post' => [
                'id' => $kudosHistory->post_id,
                'title' => $kudosHistory->post->topic->topic_title,
            ],
        ];
        return array_merge([
            'id' => $event->event_id,
            'created_at' => $event->date->toIso8601String(),
        ], $event->details);
    }
}