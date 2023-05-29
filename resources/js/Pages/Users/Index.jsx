import React from "react";
import { Head } from "@inertiajs/inertia-react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Paginator from "@/Components/Paginator";


function Index({auth, users, auth_user}) {
    
    return (
        <AuthenticatedLayout role={auth_user.role} auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Usuarios</h2>}>
            <Head title="Usuarios" />
            
            <Paginator data={users} routeCreate={route("users.create")} routeEdit="users"/>

        </AuthenticatedLayout>
    );
}

export default Index;
