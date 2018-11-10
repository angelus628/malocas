<?php
use Migrations\AbstractMigration;

class RenameColumnDateToDate extends AbstractMigration
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
        $table = $this->table('shifts');
        $table->renameColumn('date', 'date_');
        $table->update();
    }
}
