import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/inertia-react";

export default function Dashboard(props) {
    const { user, registered_users_last_week, auth, errors, registered_users } =
        props;

    return (
        <AuthenticatedLayout
            role={user?.role}
            propiedades={props}
            auth={auth}
            errors={errors}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12 w-[90%] md:w-full mx-auto">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm rounded-lg text-center md:text-left">
                        <h1 className="p-4 text-[20px]">
                            Bienvenido {auth?.user?.name}
                        </h1>
                        {user?.role === "admin" && (
                            <h2 className="px-4 text-[18px]">
                                Hay {registered_users?.length}{" "}
                                {registered_users?.length !== 1
                                    ? " miembros registrados"
                                    : " miembro registrado"}
                            </h2>
                        )}

                        {(registered_users_last_week?.length &&
                            user?.role === "admin") ? (
                                <h2 className="p-4 text-[16px]">
                                    En la útlima semana se{" "}
                                    {registered_users_last_week.length > 1
                                        ? " han"
                                        : " ha"}
                                    registrado{" "}
                                    {registered_users_last_week.length +
                                        (registered_users_last_week.length > 1
                                            ? " miembros"
                                            : " miembro")}
                                </h2>
                            ) : ""}
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
