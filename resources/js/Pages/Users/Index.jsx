import React from "react";
import { Head } from "@inertiajs/inertia-react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Paginator from "@/Components/Paginator";

function Index({auth, users, user}) {
    
    return (
        <AuthenticatedLayout role={user.role} auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Usuarios</h2>}>
            <Head title="Usuarios" />
            
            <Paginator data={users} routeCreate={route("users.create")} routeEdit="users"/>

        </AuthenticatedLayout>
    );
}

export default Index;
