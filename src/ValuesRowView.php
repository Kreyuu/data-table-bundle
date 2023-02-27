<?php

declare(strict_types=1);

namespace Kreyu\Bundle\DataTableBundle;

use Kreyu\Bundle\DataTableBundle\Column\ColumnInterface;

class ValuesRowView
{
    public array $vars = [];

    public function __construct(
        public DataTableView $parent,
        public int $rowIndex,
        public mixed $data = null,
    ) {
        /**
         * @var array<ColumnInterface> $columns
         */
        $columns = (clone $parent)->vars['columns'];

        $this->vars['row_index'] = $rowIndex;
        $this->vars['columns'] = [];

        foreach ($columns as $column) {
            $column->setData($this->data);

            $view = $column->createView($parent);
            $view->vars['row_index'] = $this->rowIndex;

            $this->vars['columns'][$column->getName()] = $view;
        }
    }
}
