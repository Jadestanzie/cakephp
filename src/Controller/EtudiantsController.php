<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Etudiants Controller
 *
 * @property \App\Model\Table\EtudiantsTable $Etudiants
 *
 * @method \App\Model\Entity\Etudiant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EtudiantsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $etudiants = $this->paginate($this->Etudiants);

        $this->set(compact('etudiants'));
    }

    /**
     * View method
     *
     * @param string|null $id Etudiant id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etudiant = $this->Etudiants->get($id, [
            'contain' => []
        ]);

        $this->set('etudiant', $etudiant);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etudiant = $this->Etudiants->newEntity();
        if ($this->request->is('post')) {
            $etudiant = $this->Etudiants->patchEntity($etudiant, $this->request->getData());
            if ($this->Etudiants->save($etudiant)) {
                $this->Flash->success(__('The etudiant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etudiant could not be saved. Please, try again.'));
        }
        $this->set(compact('etudiant'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Etudiant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etudiant = $this->Etudiants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etudiant = $this->Etudiants->patchEntity($etudiant, $this->request->getData());
            if ($this->Etudiants->save($etudiant)) {
                $this->Flash->success(__('The etudiant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etudiant could not be saved. Please, try again.'));
        }
        $this->set(compact('etudiant'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Etudiant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etudiant = $this->Etudiants->get($id);
        if ($this->Etudiants->delete($etudiant)) {
            $this->Flash->success(__('The etudiant has been deleted.'));
        } else {
            $this->Flash->error(__('The etudiant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
