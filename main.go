package main

import (
    "net/http"
    "encoding/json"
)

func main() {
    // Crear un enrutador web
    r := mux.NewRouter()

    // Definir una ruta que responda a las solicitudes para obtener datos
    r.HandleFunc("/api/data", GetData).Methods("GET")

    // Servir archivos estáticos (HTML, CSS, JS, etc.)
    r.PathPrefix("/static/").Handler(http.StripPrefix("/static/", http.FileServer(http.Dir("static")))

    // Iniciar el servidor en el puerto 8080
    http.Handle("/", r)
    http.ListenAndServe(":8080", nil)
}

func GetData(w http.ResponseWriter, r *http.Request) {
    // Simular datos para enviar al cliente
    data := map[string]interface{}{
        "ventas": 1000,
        "inventario": 500,
    }

    // Convertir datos a JSON
    jsonData, err := json.Marshal(data)
    if err != nil {
        http.Error(w, "Error al convertir a JSON", http.StatusInternalServerError)
        return
    }

    // Establecer encabezado de tipo JSON
    w.Header().Set("Content-Type", "application/json")

    // Enviar datos JSON al cliente
    w.Write(jsonData)
}
