<div class="container">
    <div class="d-flex justify-content-center">
    <h1>List des clients</h1>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><?php $patient->getLastname() ?></th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Phone</th>
                <th>Mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Giraud</td>
                <td>Pierre</td>
                <td>28</td>
                <td>0645454545</td>
                <td>mail@mail.fr</td>
            </tr>
            <!-- <tr>
                <td>Durand</td>
                <td>Victor</td>
                <td>26</td>
                <td>26</td>
                <td>26</td>
            </tr>
            <tr>
                <td>Joly</td>
                <td>Julia</td>
                <td>27</td>
                <td>27</td>
                <td>27</td>
            </tr> -->
        </tbody>
    </table>
</div>