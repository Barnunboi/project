<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WorkOrders Controller
 *
 * @property \App\Model\Table\WorkOrdersTable $WorkOrders
 *
 * @method \App\Model\Entity\WorkOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WorkOrdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Customers']
        ];
        $workOrders = $this->paginate($this->WorkOrders);

        $this->set(compact('workOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Work Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workOrder = $this->WorkOrders->get($id, [
            'contain' => ['Users', 'Customers', 'Invoices']
        ]);

        $this->set('workOrder', $workOrder);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workOrder = $this->WorkOrders->newEntity();
        if ($this->request->is('post')) {
            $workOrder = $this->WorkOrders->patchEntity($workOrder, $this->request->getData());
            if ($this->WorkOrders->save($workOrder)) {
                $this->Flash->success(__('The work order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work order could not be saved. Please, try again.'));
        }
        $users = $this->WorkOrders->Users->find('list', ['limit' => 200]);
        $customers = $this->WorkOrders->Customers->find('list', ['limit' => 200]);
        $this->set(compact('workOrder', 'users', 'customers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Work Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workOrder = $this->WorkOrders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workOrder = $this->WorkOrders->patchEntity($workOrder, $this->request->getData());
            if ($this->WorkOrders->save($workOrder)) {
                $this->Flash->success(__('The work order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work order could not be saved. Please, try again.'));
        }
        $users = $this->WorkOrders->Users->find('list', ['limit' => 200]);
        $customers = $this->WorkOrders->Customers->find('list', ['limit' => 200]);
        $this->set(compact('workOrder', 'users', 'customers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Work Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workOrder = $this->WorkOrders->get($id);
        if ($this->WorkOrders->delete($workOrder)) {
            $this->Flash->success(__('The work order has been deleted.'));
        } else {
            $this->Flash->error(__('The work order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
