//Conexion para acciones crud con firebase

<script>
    var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
authDomain: "{{ config('services.firebase.auth_domain') }}",
databaseURL: "{{ config('services.firebase.database_url') }}",
projectId: "{{ config('services.firebase.project_id') }}",
storageBucket: "{{ config('services.firebase.storage_bucket') }}",
messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
appId: "{{ config('services.firebase.app_id') }}"
    };

    firebase.initializeApp(config);
    var database = firebase.database();
    var lastIndex = 0;
</script>