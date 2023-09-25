<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\ORM\Query;
use Cake\Http\ServerRequest;

/**
 * Clicktrack Controller
 *
 * @property \App\Model\Table\ClicktrackTable $Clicktrack
 */
class ClicktracksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function click($id = null)
    {
        $data = $this->request->getData();
        $clicktracksTable = $this->getTableLocator()->get('Clicktracks');
        $query = $clicktracksTable->find('all')
            ->where(['Clicktracks.NetworkOfferId' => $data["NetworkOfferId"]]);
        $row = $query->all();
        $number = $query->count();

        if ($number > 0 ) {
            $clicktrack = $clicktracksTable->get($data['NetworkOfferId']);
            $clicktrack->ClickCount = $clicktrack->ClickCount + 1;
            $this->Clicktracks->save($clicktrack);

        } else {
            $clicktrack = $clicktracksTable->newEmptyEntity();
            $clicktrack->NetworkOfferId = $data['NetworkOfferId'];
            $clicktrack->ClickCount = 1;
            $this->Clicktracks->save($clicktrack);
        }
        return $this->redirect(['action' => 'index']);
    }
    

    public function index()
    {
        $query = $this->Clicktracks->find();
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
        $clicktrack = $this->Clicktracks->get($id, contain: []);
        $this->set(compact('clicktrack'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clicktrack = $this->Clicktracks->newEmptyEntity();
        if ($this->request->is('post')) {
            $clicktrack = $this->Clicktracks->patchEntity($clicktrack, $this->request->getData());
            if ($this->Clicktracks->save($clicktrack)) {
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
        $clicktrack = $this->Clicktracks->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clicktrack = $this->Clicktracks->patchEntity($clicktrack, $this->request->getData());
            if ($this->Clicktracks->save($clicktrack)) {
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
        $clicktrack = $this->Clicktracks->get($id);
        if ($this->Clicktracks->delete($clicktrack)) {
            $this->Flash->success(__('The clicktrack has been deleted.'));
        } else {
            $this->Flash->error(__('The clicktrack could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
