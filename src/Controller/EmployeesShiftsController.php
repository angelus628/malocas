<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmployeesShifts Controller
 *
 * @property \App\Model\Table\EmployeesShiftsTable $EmployeesShifts
 *
 * @method \App\Model\Entity\EmployeesShift[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesShiftsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Shifts']
        ];
        $employeesShifts = $this->paginate($this->EmployeesShifts);

        $this->set(compact('employeesShifts'));
    }

    /**
     * View method
     *
     * @param string|null $id Employees Shift id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeesShift = $this->EmployeesShifts->get($id, [
            'contain' => ['Employees', 'Shifts']
        ]);

        $this->set('employeesShift', $employeesShift);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeesShift = $this->EmployeesShifts->newEntity();
        if ($this->request->is('post')) {
            $employeesShift = $this->EmployeesShifts->patchEntity($employeesShift, $this->request->getData());
            if ($this->EmployeesShifts->save($employeesShift)) {
                $this->Flash->success(__('The employees shift has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees shift could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesShifts->Employees->find('list', ['limit' => 200]);
        $shifts = $this->EmployeesShifts->Shifts->find('list', [
            'limit' => 200,
            'keyField'   => 'id',
            'valueField' => 'range_',
        ]);
        $this->set(compact('employeesShift', 'employees', 'shifts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employees Shift id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeesShift = $this->EmployeesShifts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeesShift = $this->EmployeesShifts->patchEntity($employeesShift, $this->request->getData());
            if ($this->EmployeesShifts->save($employeesShift)) {
                $this->Flash->success(__('The employees shift has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees shift could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesShifts->Employees->find('list', ['limit' => 200]);
        $shifts = $this->EmployeesShifts->Shifts->find('list', [
            'limit' => 200,
            'keyField'   => 'id',
            'valueField' => 'range_',
        ]);
        $this->set(compact('employeesShift', 'employees', 'shifts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employees Shift id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeesShift = $this->EmployeesShifts->get($id);
        if ($this->EmployeesShifts->delete($employeesShift)) {
            $this->Flash->success(__('The employees shift has been deleted.'));
        } else {
            $this->Flash->error(__('The employees shift could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
