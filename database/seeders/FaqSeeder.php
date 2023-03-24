<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'title' => "How to get the web hosting testing for 3 Hours?",
                'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores aliquam quibusdam corporis ea dignissimos fugit numquam! Sit vero saepe rerum fugit rem exercitationem, dolor nobis officiis asperiores impedit reiciendis, odit laborum alias earum incidunt deserunt suscipit ratione? Dolorum esse assumenda voluptates, deleniti numquam, doloribus aliquid deserunt magni dolore at distinctio."
            ],
            [
                'title' => "How can I change the nameservers for my domain?",
                'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores aliquam quibusdam corporis ea dignissimos fugit numquam! Sit vero saepe rerum fugit rem exercitationem, dolor nobis officiis asperiores impedit reiciendis, odit laborum alias earum incidunt deserunt suscipit ratione? Dolorum esse assumenda voluptates, deleniti numquam, doloribus aliquid deserunt magni dolore at distinctio."
            ],
            [
                'title' => "How to transfer an existing hosting account?",
                'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores aliquam quibusdam corporis ea dignissimos fugit numquam! Sit vero saepe rerum fugit rem exercitationem, dolor nobis officiis asperiores impedit reiciendis, odit laborum alias earum incidunt deserunt suscipit ratione? Dolorum esse assumenda voluptates, deleniti numquam, doloribus aliquid deserunt magni dolore at distinctio."
            ],
            [
                'title' => "How to set up Free Email Forwarding?",
                'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores aliquam quibusdam corporis ea dignissimos fugit numquam! Sit vero saepe rerum fugit rem exercitationem, dolor nobis officiis asperiores impedit reiciendis, odit laborum alias earum incidunt deserunt suscipit ratione? Dolorum esse assumenda voluptates, deleniti numquam, doloribus aliquid deserunt magni dolore at distinctio."
            ],
            [
                'title' => "How to set up Free Email Forwarding?",
                'body' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores aliquam quibusdam corporis ea dignissimos fugit numquam! Sit vero saepe rerum fugit rem exercitationem, dolor nobis officiis asperiores impedit reiciendis, odit laborum alias earum incidunt deserunt suscipit ratione? Dolorum esse assumenda voluptates, deleniti numquam, doloribus aliquid deserunt magni dolore at distinctio."
            ],
        ];

        foreach($faqs as $faq)
        {
            Faq::create($faq);
        }
    }
}
