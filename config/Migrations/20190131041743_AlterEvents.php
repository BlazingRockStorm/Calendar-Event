<?php
use Migrations\AbstractMigration;

class AlterEvents extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('events');
        $table->removeColumn('event_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('event_start_time', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('event_finish_time', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
