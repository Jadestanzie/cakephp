<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Resultats Controller
 *
 * @property \App\Model\Table\ResultatsTable $Resultats
 *
 * @method \App\Model\Entity\Resultat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResultatsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $resultats = $this->paginate($this->Resultats);

        $this->set(compact('resultats'));
    }

    /**
     * View method
     *
     * @param string|null $id Resultat id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resultat = $this->Resultats->get($id, [
            'contain' => []
        ]);

        $this->set('resultat', $resultat);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resultat = $this->Resultats->newEntity();
        if ($this->request->is('post')) {
            $resultat = $this->Resultats->patchEntity($resultat, $this->request->getData());
            if ($this->Resultats->save($resultat)) {
                $this->Flash->success(__('The resultat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resultat could not be saved. Please, try again.'));
        }
        $this->set(compact('resultat'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Resultat id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resultat = $this->Resultats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resultat = $this->Resultats->patchEntity($resultat, $this->request->getData());
            if ($this->Resultats->save($resultat)) {
                $this->Flash->success(__('The resultat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resultat could not be saved. Please, try again.'));
        }
        $this->set(compact('resultat'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Resultat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resultat = $this->Resultats->get($id);
        if ($this->Resultats->delete($resultat)) {
            $this->Flash->success(__('The resultat has been deleted.'));
        } else {
            $this->Flash->error(__('The resultat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
