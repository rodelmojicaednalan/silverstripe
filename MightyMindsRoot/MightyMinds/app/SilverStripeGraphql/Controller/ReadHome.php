<?php

    namespace Controller\GraphQL;

    use GraphQL\Type\Definition\Type;
    use SilverStripe\GraphQL\TypeCreator;
    use Controller\GraphQL\CreateContent;

    class ReadHome extends TypeCreator{

        public function attributes(){

            return [

                'name' => 'Home'

            ];

        }

        public function fields(){

            return [

                'Contents' => ['type' => Type::nonNull(CreateContent::fields())]

            ];

        }

    }