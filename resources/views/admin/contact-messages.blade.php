<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages de contact - Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <style>
        .admin-messages-table-wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            overflow-x: auto;
        }
        .admin-users-table th, .admin-users-table td {
            white-space: nowrap;
        }
        .admin-users-table td.message-cell {
            max-width: 220px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .admin-users-table td.subject-cell {
            max-width: 160px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .view-btn {
            background: #7C3AED;
            color: #fff;
            border: none;
            border-radius: 1.2rem;
            padding: 0.5em 1.2em;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.18s;
        }
        .view-btn:hover {
            background: #5b23b4;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0; top: 0; width: 100vw; height: 100vh;
            background: rgba(44,34,84,0.13);
            align-items: center;
            justify-content: center;
        }
        .modal.active { display: flex; }
        .modal-content {
            background: #fff;
            border-radius: 1.5rem;
            padding: 2.2rem 2.5rem;
            min-width: 320px;
            max-width: 95vw;
            box-shadow: 0 4px 24px rgba(44,34,84,0.13);
            position: relative;
        }
        .modal-close {
            position: absolute;
            top: 1.2rem;
            right: 1.2rem;
            background: #d13c2f;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 2.2rem;
            height: 2.2rem;
            font-size: 1.3rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-close:hover { background: #a81d1d; }
        .modal-content h3 { margin-top: 0; color: #7C3AED; font-size: 1.2rem; }
        .modal-content .modal-label { font-weight: 700; color: #232323; margin-top: 1.1em; }
        .modal-content .modal-value { margin-bottom: 0.7em; color: #444; }
    </style>
</head>
<body>
    <div class="admin-flex-layout">
        @include('components.admin-sidebar')
        <div class="admin-flex-main">
            @include('components.navbar')
            <main class="admin-main-content">
                <section class="admin-users-header">
                    <h1>Messages de contact</h1>
                </section>
                <section class="admin-messages-table-wrapper">
                    @if($messages->count())
                        <table class="admin-users-table" style="width:100%;min-width:900px;">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th style="max-width:160px;">Sujet</th>
                                    <th style="max-width:220px;">Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $msg)
                                <tr>
                                    <td>{{ $msg->name }}</td>
                                    <td>{{ $msg->email }}</td>
                                    <td class="subject-cell" title="{{ $msg->subject }}">{{ $msg->subject }}</td>
                                    <td class="message-cell" title="{{ $msg->message }}">{{ $msg->message }}</td>
                                    <td>{{ $msg->created_at->format('d/m/Y H:i') }}</td>
                                    <td><button class="view-btn" onclick="showModal({{ $msg->id }})">Voir</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin-top:1.5rem;">{{ $messages->links() }}</div>
                    @else
                        <div style="color:#888;">Aucun message pour le moment.</div>
                    @endif
                </section>
                <!-- Modal for viewing full message -->
                <div class="modal" id="messageModal">
                    <div class="modal-content" id="modalContent">
                        <button class="modal-close" onclick="closeModal()">×</button>
                        <h3>Détail du message</h3>
                        <div class="modal-label">Nom</div>
                        <div class="modal-value" id="modalName"></div>
                        <div class="modal-label">Email</div>
                        <div class="modal-value" id="modalEmail"></div>
                        <div class="modal-label">Sujet</div>
                        <div class="modal-value" id="modalSubject"></div>
                        <div class="modal-label">Message</div>
                        <div class="modal-value" id="modalMessage"></div>
                        <div class="modal-label">Date</div>
                        <div class="modal-value" id="modalDate"></div>
                    </div>
                </div>
                <script>
                    // Prepare all messages data for modal
                    const messages = @json($messages->keyBy('id'));
                    function showModal(id) {
                        const msg = messages[id];
                        document.getElementById('modalName').textContent = msg.name;
                        document.getElementById('modalEmail').textContent = msg.email;
                        document.getElementById('modalSubject').textContent = msg.subject || '-';
                        document.getElementById('modalMessage').textContent = msg.message;
                        document.getElementById('modalDate').textContent = (new Date(msg.created_at)).toLocaleString('fr-FR');
                        document.getElementById('messageModal').classList.add('active');
                    }
                    function closeModal() {
                        document.getElementById('messageModal').classList.remove('active');
                    }
                    // Close modal on ESC
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') closeModal();
                    });
                    // Close modal on click outside
                    document.getElementById('messageModal').addEventListener('click', function(e) {
                        if (e.target === this) closeModal();
                    });
                </script>
            </main>
            
        </div>
    </div>
    @include('components.footer')
</body>
</html> 