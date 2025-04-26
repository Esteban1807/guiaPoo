public class Register {
    private Student student;
    private Licenses licenses;

    public Register(Student student, Licenses licenses) {
        this.student = student;
        this.licenses = licenses;
    }

    public Student getStudent() {
        return this.student;
    }

    public Licenses getLicenses() {
        if (this.getStudent().getTypeLicense().equals("A")) {
            this.licenses = new LicenseA(0, 0, "");
        } else
        if (this.getStudent().getTypeLicense().equals("B")) {
            this.licenses = new LicenseB(0, 0, "");
        } else
        if (this.getStudent().getTypeLicense().equals("C")) {
            this.licenses = new LicenseC(0, 0, "");
        }
        return this.licenses;
    }
    public static void main(String[] args) {
        Student student = new Student(1, "Esteban", "Ome", "Neiva", 318, "O+", "A"); 
        Register register = new Register(student, null);

        System.out.println("Identification: " + register.student.getIdentification());
        System.out.println("Name: " + register.student.getName());
        System.out.println("Last name: " + register.student.getLastName());
        System.out.println("Address: " + register.student.getAddress());
        System.out.println("Telephone: " + register.student.getTelephone());
        System.out.println("RH: " + register.student.getRh());
        System.out.println("PLAN: " + register.student.getTypeLicense());
        System.out.println("Cost: " + register.getLicenses().getCost());
        System.out.println("Duration: " + register.getLicenses().getDuration());
        System.out.println("Description: " + register.getLicenses().getDescription());
        System.out.println("Total: " + register.getLicenses().calculate());
    }
}