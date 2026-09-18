<?= view('templates/header', ['title' => 'Customer Accounts']) ?>

<h1>Customer Accounts</h1>
<p>Temporary customer records are loaded from a static PHP array in the Customers controller.</p>

<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td data-label="Full Name"><?= esc($customer['full_name']) ?></td>
                <td data-label="Email"><?= esc($customer['email']) ?></td>
                <td data-label="Phone"><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= view('templates/footer') ?>
