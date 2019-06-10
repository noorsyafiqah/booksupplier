<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookstores Controller
 *
 * @property \App\Model\Table\BookstoresTable $Bookstores
 *
 * @method \App\Model\Entity\Bookstore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookstoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $bookstores = $this->paginate($this->Bookstores);

        $this->set(compact('bookstores'));
    }

    /**
     * View method
     *
     * @param string|null $id Bookstore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bookstore = $this->Bookstores->get($id, [
            'contain' => ['Invoices']
        ]);

        $this->set('bookstore', $bookstore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bookstore = $this->Bookstores->newEntity();
        if ($this->request->is('post')) {
            $bookstore = $this->Bookstores->patchEntity($bookstore, $this->request->getData());
            if ($this->Bookstores->save($bookstore)) {
                $this->Flash->success(__('The bookstore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bookstore could not be saved. Please, try again.'));
        }
        $this->set(compact('bookstore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bookstore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bookstore = $this->Bookstores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bookstore = $this->Bookstores->patchEntity($bookstore, $this->request->getData());
            if ($this->Bookstores->save($bookstore)) {
                $this->Flash->success(__('The bookstore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bookstore could not be saved. Please, try again.'));
        }
        $this->set(compact('bookstore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bookstore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookstore = $this->Bookstores->get($id);
        if ($this->Bookstores->delete($bookstore)) {
            $this->Flash->success(__('The bookstore has been deleted.'));
        } else {
            $this->Flash->error(__('The bookstore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
