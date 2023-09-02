<?php

namespace Database\Seeders;

use App\Models\Pipeline;
use App\Models\PipelineStatus;
use Illuminate\Database\Seeder;

class PipelineSeeder extends Seeder
{
    public function run(): void
    {
        $pipelines = [
            [
                'name' => 'Default Pipeline',
                'is_default' => true,
                'statuses' => [
                    [
                        'name' => 'Applied',
                        'order_column' => 1,
                        'color' => '#eab308',
                        'is_default' => true,
                    ],
                    [
                        'name' => 'Feedback',
                        'order_column' => 2,
                        'color' => '#f97316',
                        'is_default' => false,
                    ],
                    [
                        'name' => 'Interviewing',
                        'order_column' => 3,
                        'color' => '#ec4899',
                        'is_default' => false,
                    ],
                    [
                        'name' => 'Made Offer',
                        'order_column' => 4,
                        'color' => '#0d9488',
                        'is_default' => false,
                    ],
                    [
                        'name' => 'Disqualified',
                        'order_column' => 5,
                        'color' => '#78716c',
                        'is_default' => false,
                    ],
                    [
                        'name' => 'Hired',
                        'order_column' => 5,
                        'color' => '#3b82f6',
                        'is_default' => false,
                    ],
                ],
            ],
            [
                'name' => 'Custom',
                'is_default' => false,
                'statuses' => [
                    [
                        'name' => 'New',
                        'order_column' => 1,
                        'color' => '#a855f7',
                        'is_default' => true,
                    ],
                    [
                        'name' => 'In Progress',
                        'order_column' => 2,
                        'color' => '#eab308',
                        'is_default' => false,
                    ],
                    [
                        'name' => 'Hired',
                        'order_column' => 3,
                        'color' => '#84cc16',
                        'is_default' => false,
                    ],
                    [
                        'name' => 'Rejected',
                        'order_column' => 4,
                        'color' => '#f43f5e',
                        'is_default' => false,
                    ],
                ],
            ],
        ];

        foreach ($pipelines as $pipeline) {
            $pipelineModel = Pipeline::factory()->create([
                'name' => $pipeline['name'],
                'is_default' => $pipeline['is_default'],
            ]);

            foreach ($pipeline['statuses'] as $status) {
                PipelineStatus::factory()->create([
                    'name' => $status['name'],
                    'pipeline_id' => $pipelineModel->id,
                    'order_column' => $status['order_column'],
                    'color' => $status['color'],
                    'is_default' => $status['is_default'],
                ]);
            }
        }
    }
}
