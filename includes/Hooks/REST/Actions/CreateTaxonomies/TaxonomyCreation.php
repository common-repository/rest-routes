<?php

declare(strict_types=1);

namespace RestRoutes\Hooks\REST\Actions\CreateTaxonomies;

class TaxonomyCreation
{
    public function create($endpoint, \WP_REST_Request $request_data)
    {
        $defaultFields = array();
        foreach ($endpoint['defaultFields'] as $defaultField) {
            $value = '';
            foreach ($defaultField['fields'] as $field) {
                if ($field['id'] === 'source') {
                    if ($field['value'] === 'fixedValue') {
                        $value = $defaultField['fields'][1]['value'];
                    } elseif ($field['value'] === 'parameter') {
                        $value
                            = $request_data->get_param($defaultField['fields'][2]['value']);
                    }
                }
            }

            $defaultFields[$defaultField['name']] = $value;
        }

        return wp_insert_term($defaultFields['name'] ?? '', $defaultFields['taxonomy'] ?? 'category');
    }
}
