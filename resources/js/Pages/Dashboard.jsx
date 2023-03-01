import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/inertia-react";
import { useState } from "react";

export default function Dashboard(props) {

    return (
        <AuthenticatedLayout
            role={props?.user?.role}
            propiedades={props}
            auth={props.auth}
            errors={props.errors}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <h1 className="p-4 text-[20px]">Bienvenido {props.auth.user.name}, hay {props.users.length} {props.users.length > 1 ? " miembros registrados" : " miembro registrado"}</h1>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
