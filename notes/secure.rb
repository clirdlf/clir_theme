#!/usr/bin/env ruby

clir_domains = %w(
  dlme
  staging
  www
  hiddencollections
)

diglib_domains = %w(
  jobs
  staging
  www
)

other = [
  'leadingchangeinstitute.org',
  'www.leadingchangeinstitute.org'
]

def register_domains(domains, suffix = '')
  domains.each do |domain|
    main_domain = "sudo -H /opt/letsencrypt/letsencrypt-auto --apache -d #{domain}#{suffix}"
    # admin_domain = "sudo -H /opt/letsencrypt/letsencrypt-auto --apache -d #{domain}.wordpres.clir.org"
    puts main_domain
  end
end

register_domains(clir_domains, '.clir.org')
register_domains(diglib_domains, '.diglib.org')
register_domains(other)
