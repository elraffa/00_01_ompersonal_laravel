import React from "react";
import { Head } from "@inertiajs/inertia-react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import UsersList from "@/Components/UsersList";

function Index({auth, users}) {
    

    return (
        <AuthenticatedLayout auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Usuarios</h2>}>
            <Head title="Usuarios" />
            
            <UsersList users={users}/>

        </AuthenticatedLayout>
    );
}

export default Index;
