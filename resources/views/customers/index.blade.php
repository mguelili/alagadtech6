<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Customers</title>
<style>body{font:16px Arial,sans-serif;margin:40px auto;max-width:900px;padding:0 18px;color:#222}nav{display:flex;gap:18px;margin-bottom:24px}a{color:#1457a6}table{border-collapse:collapse;width:100%}th,td{padding:12px;text-align:left;border-bottom:1px solid #ddd}th{background:#f2f4f7}</style></head>
<body><nav><a href="{{ route('customers.index') }}">Customers</a><a href="{{ route('users.index') }}">Users</a></nav>
<h1>Customers</h1><table><thead><tr><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead><tbody>
@forelse ($customers as $customer)<tr><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td></tr>
@empty<tr><td colspan="3">No customers found. Run the database seeder.</td></tr>@endforelse
</tbody></table></body></html>
