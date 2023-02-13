import React from "react";
import { Head } from "@inertiajs/inertia-react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Paginator from "@/Components/Paginator";

function Index({auth, members, user}) {
    
    return (
        <AuthenticatedLayout role={user.role} auth={auth} header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Miembros</h2>}>
            <Head title="Miembros" />
            
            <Paginator data={members} routeCreate={route("members.create")} routeEdit="members"/>

        </AuthenticatedLayout>
    );
}

export default Index;