<?php

namespace Controller\GraphQL;

use GraphQL\Type\Definition\Type;
use SilverStripe\GraphQL\TypeCreator;


class CreateContent extends TypeCreator{

    public function attributes(){

        return [

            'name' => 'Contents'

        ];

    }

    public function fields(){

        return [

            'Header' => ['type' => Type::nonNull(Type::String())],
            'SidebarWidgets' => ['type' => Type::nonNull(Type::String())]

        ];

    }

}
