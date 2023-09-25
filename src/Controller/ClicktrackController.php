<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clicktrack Controller
 *
 * @property \App\Model\Table\ClicktrackTable $Clicktrack
 */
class ClicktrackController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Clicktrack->find();
        $clicktrack = $this->paginate($query);

        $this->set(compact('clicktrack'));
    }

    /**
     * View method
     *
     * @param string|null $id Clicktrack id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clicktrack = $this->Clicktrack->get($id, contain: []);
        $this->set(compact('clicktrack'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clicktrack = $this->Clicktrack->newEmptyEntity();
        if ($this->request->is('post')) {
            $clicktrack = $this->Clicktrack->patchEntity($clicktrack, $this->request->getData());
            if ($this->Clicktrack->save($clicktrack)) {
                $this->Flash->success(__('The clicktrack has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clicktrack could not be saved. Please, try again.'));
        }
        $this->set(compact('clicktrack'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clicktrack id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clicktrack = $this->Clicktrack->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clicktrack = $this->Clicktrack->patchEntity($clicktrack, $this->request->getData());
            if ($this->Clicktrack->save($clicktrack)) {
                $this->Flash->success(__('The clicktrack has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clicktrack could not be saved. Please, try again.'));
        }
        $this->set(compact('clicktrack'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clicktrack id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clicktrack = $this->Clicktrack->get($id);
        if ($this->Clicktrack->delete($clicktrack)) {
            $this->Flash->success(__('The clicktrack has been deleted.'));
        } else {
            $this->Flash->error(__('The clicktrack could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
